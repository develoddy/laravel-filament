#!/bin/bash

set -euo pipefail

echo ""
echo "🚀 LUJANDEV - DEPLOY PRODUCCIÓN"
echo "==============================="

# Localizar automáticamente la raíz del repositorio
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

REPO_ROOT=$(git -C "$SCRIPT_DIR" rev-parse --show-toplevel 2>/dev/null || true)

if [ -z "$REPO_ROOT" ]; then
    echo "❌ No se ha podido localizar el repositorio de LujanDev."
    exit 1
fi

cd "$REPO_ROOT"

echo "📁 Proyecto: $REPO_ROOT"

BRANCH=$(git branch --show-current)

echo "🌿 Rama actual: $BRANCH"

# Producción debe estar limpia
if [ -n "$(git status --porcelain)" ]; then
    echo ""
    echo "❌ PRODUCCIÓN TIENE CAMBIOS LOCALES."
    echo "No se realizará el deploy."
    echo ""
    git status --short
    exit 1
fi

echo ""
echo "⬇️ Actualizando repositorio..."

git pull --ff-only

echo ""
echo "📂 Sincronizando public/ con ~/www/..."

rsync -rlvO \
    --exclude='index.php' \
    public/ ~/www/

echo ""
echo "✅ DEPLOY COMPLETADO"
echo "🌿 Rama: $BRANCH"
echo "📦 Commit: $(git log -1 --pretty=format:'%h - %s')"
echo ""