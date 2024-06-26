import { defineConfig } from 'vite';
import reactRefresh from '@vitejs/plugin-react-refresh';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
export default defineConfig({

    plugins: [
        react(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.jsx',
                'resources/js/header.jsx',
                'resources/js/momo.jsx',
            ],
            refresh: true,
        }),

    ],
});
