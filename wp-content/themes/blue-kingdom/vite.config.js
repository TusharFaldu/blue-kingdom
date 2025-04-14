import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin';
import { wordpressPlugin, wordpressThemeJson } from '@roots/vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import path from 'path';

export default defineConfig({
  base: '/wp-content/themes/blue-kingdom/public/build/',

  plugins: [
    tailwindcss(),

    laravel({
      input: [
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/css/editor.css',
        'resources/js/editor.js',
      ],
      refresh: true,
    }),

    wordpressPlugin(),

    wordpressThemeJson({
      disableTailwindColors: false,
      disableTailwindFonts: false,
      disableTailwindFontSizes: false,
    }),

    viteStaticCopy({
      targets: [
        {
          src: 'resources/images/*',
          dest: 'images',
        },
      ],
    }),
  ],

  resolve: {
    alias: {
      '@scripts': path.resolve(__dirname, 'resources/js'),
      '@styles': path.resolve(__dirname, 'resources/css'),
      '@fonts': path.resolve(__dirname, 'resources/fonts'),
      '@images': path.resolve(__dirname, 'resources/images'),
    },
  },

  build: {
    manifest: true,
    outDir: 'public/build',
    rollupOptions: {
      input: {
        app: 'resources/js/app.js',
      },
    },
  },

  assetsInclude: ['**/*.svg', '**/*.png', '**/*.jpg', '**/*.jpeg', '**/*.gif', '**/*.webp'],
});
