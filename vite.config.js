import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/dashboard.css',
                'resources/css/create.css',
                'resources/css/index.css',
                'resources/css/edit.css'
            ],
            refresh: true,
        }),
    ],
    // resolve: {
    //     alias: {
    //         '@': path.resolve(__dirname, 'resources/js'),
    //     },
    // },
});
