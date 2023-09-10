import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/scss/*.scss', 'resources/js/app.js', 'resources/views/**/*.blade.php'],
      refresh: true,
    }),
  ],
  server: {
    host: '192.168.15.6', 
    port: 8080, 
  },
});