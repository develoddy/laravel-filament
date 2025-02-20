import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            //refresh: [...refreshPaths],
            refresh: true,
        }),
    ],
 
    build: {
        outDir: path.resolve(__dirname, '../www/build'), // Salida hacia /www/build
        emptyOutDir: true, // Limpia la carpeta antes de construir
    },
});
