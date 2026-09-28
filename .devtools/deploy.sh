#!/bin/bash

set -e

echo ""
echo "======================================"
echo "  LUJANDEV - DEPLOY PRODUCCION"
echo "======================================"
echo ""

cd "$(git rev-parse --show-toplevel)"

BRANCH=$(git branch --show-current)

echo "Proyecto: $(pwd)"
echo "Rama actual: $BRANCH"
echo ""

# Produccion debe estar limpia
if [ -n "$(git status --porcelain)" ]; then
    echo "ERROR: PRODUCCION TIENE CAMBIOS LOCALES."
    echo "No se realizara el deploy."
    echo ""
    git status --short
    exit 1
fi

echo "Actualizando repositorio..."
git pull --ff-only origin "$BRANCH"

echo ""
echo "Sincronizando public/..."
rsync -rlvO \
    --exclude='index.php' \
    public/ ~/www/

echo ""
echo "======================================"
echo "  DEPLOY COMPLETADO"
echo "======================================"