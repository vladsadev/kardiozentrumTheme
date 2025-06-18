import {defineConfig} from 'vite';
import {resolve} from 'path';

export default defineConfig({
    // Otras configuraciones...

    build: {
        outDir: resolve(__dirname, 'dist'),
        emptyOutDir: true,
        manifest: true,
        rollupOptions: {
            input: {
                main: resolve(__dirname, 'src/js/main.js'),
            },
            output: {
                entryFileNames: 'js/[name].js',
                chunkFileNames: 'js/[name]-[hash].js',
                assetFileNames: (assetInfo) => {
                    // Asegúrate de que assetInfo.name existe antes de usarlo
                    const name = assetInfo.name || '';

                    if (/\.(gif|jpe?g|png|svg)$/.test(name)) {
                        return 'assets/[name][extname]';
                    }
                    if (/\.css$/.test(name)) {
                        return 'css/[name][extname]';
                    }
                    return 'assets/[name][extname]';
                },
            },
        },
    },
    server: {
        host: '0.0.0.0',
        port: 3000,
        strictPort: true,
        hmr: {
            // Especifica la ubicación del host para conexiones HMR
            host: 'localhost',
            // Si usas HTTPS en local, establece esto a true
            protocol: 'ws', // Usa 'wss' si tu sitio es HTTPS
            // Evita problemas de CORS
            cors: true
        },
        watch: {
            // Mejorar la detección de cambios
            usePolling: true,
            interval: 1000,
        },

        proxy: {
            '^(?!/(@vite|node_modules))': 'http://kardiozentrum.local/'  // Ajusta a tu entorno local de WordPress
        }
    },

    resolve: {
        alias: {
            '@': resolve(__dirname, 'src'),
            '@js': resolve(__dirname, 'src/js'),
            '@css': resolve(__dirname, 'src/css')
        }
    }
});