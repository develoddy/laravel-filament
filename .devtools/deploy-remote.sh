#!/usr/bin/env bash
set -Eeuo pipefail

EXPECTED_REPO="/home/lujandev/laravel-filament"
EXPECTED_PUBLIC="/home/lujandev/www"
EXPECTED_BRANCH="main"

DRY_RUN=false

case "${1:-}" in
    --dry-run) DRY_RUN=true ;;
    "") ;;
    *)
        echo "Uso: $0 [--dry-run]" >&2
        exit 2
        ;;
esac

fail() {
    echo "ERROR: $*" >&2
    exit 1
}

echo "======================================"
echo "  LUJANDEV - DEPLOY PRODUCCION"
echo "======================================"

command -v git >/dev/null || fail "Git no disponible."
command -v rsync >/dev/null || fail "Rsync no disponible."

REPO="$(git rev-parse --show-toplevel 2>/dev/null)" \
    || fail "No estamos dentro de un repositorio Git."

cd "$REPO"

[[ "$(pwd -P)" == "$EXPECTED_REPO" ]] \
    || fail "Repositorio de producción inesperado."

[[ "$(id -un)" == "lujandev" ]] \
    || fail "Usuario del sistema inesperado."

[[ "$(git branch --show-current)" == "$EXPECTED_BRANCH" ]] \
    || fail "La rama actual no es main."

[[ -d "$EXPECTED_PUBLIC" && ! -L "$EXPECTED_PUBLIC" ]] \
    || fail "Directorio público inexistente o simbólico."

[[ "$(realpath "$EXPECTED_PUBLIC")" == "$EXPECTED_PUBLIC" ]] \
    || fail "Ruta pública inesperada."

[[ -f "$EXPECTED_PUBLIC/index.php" && ! -L "$EXPECTED_PUBLIC/index.php" ]] \
    || fail "index.php de producción inexistente o simbólico."

[[ -d public ]] \
    || fail "No existe el directorio public/."

[[ -z "$(git status --porcelain)" ]] \
    || fail "Hay cambios locales en producción."

echo "Repositorio: $REPO"
echo "Destino: $EXPECTED_PUBLIC"
echo "Rama: $EXPECTED_BRANCH"
echo "Simulación: $DRY_RUN"

if [[ "$DRY_RUN" == true ]]; then
    echo ""
    echo "Simulando sincronización del código actualmente instalado..."
    rsync -rlvOn \
        --exclude='/index.php' \
        public/ "$EXPECTED_PUBLIC/"

    echo ""
    echo "SIMULACIÓN COMPLETADA."
    echo "No se han modificado archivos."
    exit 0
fi

echo ""
echo "Actualizando repositorio..."
git pull --ff-only origin "$EXPECTED_BRANCH"

echo ""
echo "Sincronizando public/..."
rsync -rlvO \
    --exclude='/index.php' \
    public/ "$EXPECTED_PUBLIC/"

echo ""
echo "======================================"
echo "  DEPLOY COMPLETADO"
echo "======================================"
