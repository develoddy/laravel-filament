# Deploy producción - LujanDev

Entrar al proyecto:

```bash
cd ~/laravel-filament

git pull

rsync -rlvO --exclude='index.php' public/ ~/www/

Importante:
- No sobrescribir ~/www/index.php
- Ejecutar el rsync desde la raíz de laravel-filament

#Contrasela SSH dinahosting
ssh lujandev@82.98.164.30
Builds20$
