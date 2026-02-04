import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/pages/auth-password.js',
                'resources/js/pages/custom-table.js',
                'resources/js/pages/dashboard-ecommerce.js',
                'resources/js/vendor.js'
            ],
            refresh: true,
        }),
        tailwindcss()
    ],
});