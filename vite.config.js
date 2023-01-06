import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/css/sun.css',
                'resources/css/welcome.css',
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/welcome.js',
            ],
            refresh: true,
        }),
    ],
    /* server: {
        hmr: {
            host: 'http://127.0.0.1:8000',
        },
    } */
});
