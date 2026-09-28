$ErrorActionPreference = "Stop"

Write-Host ""
Write-Host "==========================================" -ForegroundColor Cyan
Write-Host "   LUJANDEV - DEPLOY COMPLETO" -ForegroundColor Cyan
Write-Host "==========================================" -ForegroundColor Cyan
Write-Host ""

# --------------------------------------------------
# CONFIGURACION
# --------------------------------------------------

$RemoteUser = "lujandev"
$RemoteHost = "82.98.164.30"
$RemoteProject = "/home/lujandev/laravel-filament"

# Raiz del proyecto
$ProjectRoot = Resolve-Path (Join-Path $PSScriptRoot "..")

Set-Location $ProjectRoot

Write-Host "Proyecto: $ProjectRoot" -ForegroundColor DarkGray
Write-Host "Servidor: $RemoteUser@$RemoteHost" -ForegroundColor DarkGray
Write-Host ""

# --------------------------------------------------
# 1. PUSH LOCAL
# --------------------------------------------------

Write-Host "1/2 - Subiendo cambios a Git..." -ForegroundColor Yellow
Write-Host ""

& "$PSScriptRoot\push.ps1"
$PushExitCode = $LASTEXITCODE

if ($PushExitCode -ne 0) {
    Write-Host ""
    Write-Host "ERROR: el push local ha fallado." -ForegroundColor Red
    exit 1
}

Write-Host ""
Write-Host "Push local completado." -ForegroundColor Green
Write-Host ""

# --------------------------------------------------
# 2. DEPLOY REMOTO
# --------------------------------------------------

Write-Host "2/2 - Desplegando en produccion..." -ForegroundColor Yellow
Write-Host ""

$RemoteCommand = "cd $RemoteProject && ./.devtools/deploy.sh"

& ssh "$RemoteUser@$RemoteHost" $RemoteCommand
$DeployExitCode = $LASTEXITCODE

if ($DeployExitCode -ne 0) {
    Write-Host ""
    Write-Host "ERROR: el deploy remoto ha fallado." -ForegroundColor Red
    exit 1
}

# --------------------------------------------------
# FIN
# --------------------------------------------------

Write-Host ""
Write-Host "==========================================" -ForegroundColor Green
Write-Host "   DEPLOY COMPLETADO" -ForegroundColor Green
Write-Host "==========================================" -ForegroundColor Green
Write-Host ""
Write-Host "Local -> GitHub -> Dinahosting -> Produccion" -ForegroundColor Green
Write-Host ""