$ErrorActionPreference = "Stop"

Write-Host ""
Write-Host "======================================"
Write-Host "  LUJANDEV - PUSH LOCAL"
Write-Host "======================================"
Write-Host ""

# Ir siempre a la raiz del repositorio
$repoRoot = git rev-parse --show-toplevel 2>$null

if (-not $repoRoot) {
    Write-Host "ERROR: No estas dentro de un repositorio Git."
    exit 1
}

Set-Location $repoRoot

$branch = git branch --show-current

Write-Host "Proyecto: $repoRoot"
Write-Host "Rama: $branch"
Write-Host ""

# Comprobar cambios
$changes = git status --short

if (-not $changes) {
    Write-Host "No hay cambios para subir."
    exit 0
}

Write-Host "Cambios detectados:"
git status --short
Write-Host ""

# Actualizar informacion del remoto sin modificar archivos locales
Write-Host "Comprobando origin/$branch..."
git fetch origin $branch

if ($LASTEXITCODE -ne 0) {
    Write-Host "ERROR: No se pudo consultar origin/$branch."
    exit 1
}

# Comprobar si el remoto tiene commits que local todavia no tiene
$behind = git rev-list --count "HEAD..origin/$branch"

if ([int]$behind -gt 0) {
    Write-Host ""
    Write-Host "ERROR: origin/$branch tiene $behind commit(s) que no existen en local."
    Write-Host "Actualiza primero tu repositorio antes de hacer el deploy."
    exit 1
}

Write-Host "Repositorio local sincronizado con origin/$branch."
Write-Host ""

# Preparar cambios
Write-Host "Preparando cambios..."
git add .

# Commit automatico
$timestamp = Get-Date -Format "yyyy-MM-dd HH:mm"
$commitMessage = "chore: update $timestamp"

Write-Host "Commit: $commitMessage"
git commit -m $commitMessage

if ($LASTEXITCODE -ne 0) {
    Write-Host "ERROR: No se pudo crear el commit."
    exit 1
}

Write-Host ""

# Push
Write-Host "Subiendo a origin/$branch..."
git push origin $branch

if ($LASTEXITCODE -ne 0) {
    Write-Host "ERROR: El push ha fallado."
    exit 1
}

Write-Host ""
Write-Host "======================================"
Write-Host "  PUSH COMPLETADO"
Write-Host "======================================"