$ErrorActionPreference = "Stop"

Write-Host ""
Write-Host "======================================"
Write-Host "  LUJANDEV - PUSH LOCAL"
Write-Host "======================================"
Write-Host ""

# Ir siempre a la raiz del repositorio
$ProjectRoot = git rev-parse --show-toplevel

if (-not $ProjectRoot) {
    Write-Host "ERROR: No estas dentro de un repositorio Git."
    exit 1
}

Set-Location $ProjectRoot

$Branch = git branch --show-current

Write-Host "Proyecto: $ProjectRoot"
Write-Host "Rama: $Branch"
Write-Host ""

# Comprobar cambios
$Changes = git status --porcelain

if (-not $Changes) {
    Write-Host "No hay cambios para subir."
    exit 0
}

Write-Host "Cambios detectados:"
git status --short
Write-Host ""

# Preparar cambios
Write-Host "Preparando cambios..."
git add -A

# Commit automatico con fecha/hora
$Timestamp = Get-Date -Format "yyyy-MM-dd HH:mm"
$CommitMessage = "chore: update $Timestamp"

Write-Host ""
Write-Host "Commit: $CommitMessage"

git commit -m $CommitMessage

# Push
Write-Host ""
Write-Host "Subiendo a origin/$Branch..."
git push origin $Branch

Write-Host ""
Write-Host "======================================"
Write-Host "  PUSH COMPLETADO"
Write-Host "======================================"