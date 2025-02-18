import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            //input: ['resources/css/app.css', 'resources/js/app.js'],
            input: [
                'resources/js/app.js', 
                'resources/scss/app.scss',
                'resources/js/bootstrap.js',
                'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: path.resolve(__dirname, '../www/build'), // Salida hacia /www/build
        emptyOutDir: true, // Limpia la carpeta antes de construir
    },
});
