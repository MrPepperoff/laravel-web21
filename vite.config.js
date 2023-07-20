import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});


// const path = require('path');

// module.exports = {
//   build: {
//     outDir: '../public/assets', // путь к папке public/assets
//     emptyOutDir: true,
//   },
//   resolve: {
//     alias: {
//       '@': path.resolve(__dirname, 'resources/js'), // путь к папке resources/js
//     },
//   },
// };