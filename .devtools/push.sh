#!/bin/bash

set -euo pipefail

echo ""
echo "🚀 LUJANDEV - PUSH LOCAL"
echo "========================"

# Localizar automáticamente la raíz del repositorio
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

REPO_ROOT=$(git -C "$SCRIPT_DIR" rev-parse --show-toplevel 2>/dev/null || true)

if [ -z "$REPO_ROOT" ]; then
    echo "❌ No se ha podido localizar el repositorio Git."
    exit 1
fi

cd "$REPO_ROOT"

echo "📁 Proyecto: $REPO_ROOT"

BRANCH=$(git branch --show-current)

echo "🌿 Rama actual: $BRANCH"
echo ""

# Comprobar si existen cambios
if git diff --quiet &&
   git diff --cached --quiet &&
   [ -z "$(git ls-files --others --exclude-standard)" ]; then

    echo "✅ No hay cambios para subir."
    exit 0
fi

echo "📋 Cambios detectados:"
git status --short
echo ""

echo "➕ Preparando cambios..."
git add -A

FILES=$(git diff --cached --name-only)

AREAS=()

# Views
if echo "$FILES" | grep -q "^resources/views/about"; then
    AREAS+=("About page")
elif echo "$FILES" | grep -q "^resources/views/"; then
    AREAS+=("views")
fi

# Assets
if echo "$FILES" | grep -Eq "^resources/(imgs|images)/|^public/.*\.(png|jpg|jpeg|webp|svg)$"; then
    AREAS+=("assets")
fi

# Backend
if echo "$FILES" | grep -q "^app/"; then
    AREAS+=("backend")
fi

# Routes
if echo "$FILES" | grep -q "^routes/"; then
    AREAS+=("routes")
fi

# Database
if echo "$FILES" | grep -q "^database/"; then
    AREAS+=("database")
fi

# Frontend config
if echo "$FILES" | grep -Eq "^(package\.json|package-lock\.json|vite\.config)"; then
    AREAS+=("frontend config")
fi

# Composer
if echo "$FILES" | grep -Eq "^(composer\.json|composer\.lock)$"; then
    AREAS+=("dependencies")
fi

# Laravel config
if echo "$FILES" | grep -q "^config/"; then
    AREAS+=("configuration")
fi

# Dev tools
if echo "$FILES" | grep -q "^\.devtools/"; then
    AREAS+=("dev tools")
fi

# Generar descripción
if [ ${#AREAS[@]} -gt 0 ]; then
    AREAS_UNIQUE=$(
        printf "%s\n" "${AREAS[@]}" |
        awk '!seen[$0]++ {
            if (result != "") result = result ", "
            result = result $0
        }
        END { print result }'
    )
else
    AREAS_UNIQUE="project files"
fi

DATE=$(date "+%Y-%m-%d %H:%M")

COMMIT_MESSAGE="Update ${AREAS_UNIQUE} | ${DATE}"

echo ""
echo "📝 Commit automático:"
echo "   $COMMIT_MESSAGE"
echo ""

echo "💾 Creando commit..."
git commit -m "$COMMIT_MESSAGE"

echo ""
echo "☁️ Subiendo a origin/$BRANCH..."
git push origin "$BRANCH"

echo ""
echo "✅ PUSH COMPLETADO"
echo "🌿 Rama: $BRANCH"
echo "📦 Commit: $COMMIT_MESSAGE"
echo ""