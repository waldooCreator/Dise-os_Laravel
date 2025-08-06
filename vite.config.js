import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue(),
    ],
    server: {
        hmr: false, // Mantén desactivado el HMR por ahora
        allowedHosts: ['92e7c17bbcad.ngrok-free.app'], // Añade el host de ngrok
    },
});