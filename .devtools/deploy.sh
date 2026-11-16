#!/usr/bin/env bash
set -Eeuo pipefail

PROJECT="/Users/eddylujan/Developer/LujanDev/platform/website"
SSH_KEY="$HOME/.ssh/id_ed25519"
SSH_TARGET="lujandev@82.98.164.30"
REMOTE_DIR="/home/lujandev/laravel-filament"

fail() {
    echo "ERROR: $*" >&2
    exit 1
}

confirm() {
    local answer
    read -r -p "$1 [s/N]: " answer
    [[ "$answer" == "s" || "$answer" == "S" ]]
}

DRY_RUN=false
case "${1:-}" in
    --dry-run) DRY_RUN=true ;;
    "") ;;
    *) fail "Uso: .devtools/deploy.sh [--dry-run]" ;;
esac

cd "$(dirname "${BASH_SOURCE[0]}")/.."

[[ "$(pwd -P)" == "$PROJECT" ]] || fail "Ruta local inesperada."
[[ "$(git branch --show-current)" == "main" ]] || fail "Debes estar en main."
[[ -f "$SSH_KEY" ]] || fail "No existe la clave SSH."

echo "======================================"
echo " LUJANDEV WEBSITE - DEPLOY"
echo "======================================"

echo "Comprobando GitHub..."
git fetch origin main

[[ -z "$(git rev-list HEAD..origin/main)" ]] ||
    fail "GitHub tiene commits pendientes. Sincroniza antes de desplegar."

if [[ "$DRY_RUN" == true ]]; then
    echo ""
    echo "SIMULACIÓN LOCAL"
    git status --short
    echo "Commit actual: $(git rev-parse HEAD)"
    echo "No se crearán commits ni se actualizará producción."
    exit 0
fi

if [[ -n "$(git status --porcelain)" ]]; then
    git status --short
    confirm "¿Incluir todos estos cambios en un commit?" ||
        fail "Operación cancelada."

    git add -A
    git diff --cached --stat

    read -r -p "Mensaje del commit: " MESSAGE
    [[ -n "$MESSAGE" ]] || fail "El mensaje no puede estar vacío."

    git commit -m "$MESSAGE"
fi

if [[ -n "$(git rev-list origin/main..HEAD)" ]]; then
    git log --oneline origin/main..HEAD
    confirm "¿Publicar estos commits en GitHub?" ||
        fail "Operación cancelada."

    git push origin main
fi

git fetch origin main

[[ "$(git rev-parse HEAD)" == "$(git rev-parse origin/main)" ]] ||
    fail "El commit local no coincide con GitHub."

COMMIT="$(git rev-parse HEAD)"

echo ""
echo "Commit objetivo: $COMMIT"
echo "Destino: $SSH_TARGET"
echo "No se ejecutarán migraciones ni composer install."

confirm "¿Desplegar Website en Dinahosting?" ||
    fail "Operación cancelada."

echo ""
echo "Conectando con Dinahosting..."

ssh -o BatchMode=yes \
    -o ConnectTimeout=10 \
    -i "$SSH_KEY" \
    "$SSH_TARGET" \
    "cd '$REMOTE_DIR' && .devtools/deploy-remote.sh"

echo ""
echo "Verificando commit desplegado..."

REMOTE_COMMIT="$(
    ssh -o BatchMode=yes \
        -o ConnectTimeout=10 \
        -i "$SSH_KEY" \
        "$SSH_TARGET" \
        "cd '$REMOTE_DIR' && git rev-parse HEAD"
)"

[[ "$REMOTE_COMMIT" == "$COMMIT" ]] ||
    fail "El commit remoto no coincide con el publicado."

echo ""
echo "Verificando HTTPS..."

HTTP_STATUS="$(
    curl --silent --show-error --location \
        --output /dev/null \
        --write-out '%{http_code}' \
        --connect-timeout 10 \
        --max-time 30 \
        https://lujandev.com/
)"

[[ "$HTTP_STATUS" == "200" ]] ||
    fail "La web no responde HTTP 200 (HTTP: $HTTP_STATUS)."

echo ""
echo "DEPLOY WEBSITE COMPLETADO"
echo "Commit: $COMMIT"
echo "HTTPS: 200"
