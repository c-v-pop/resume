import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css'], // Entry point for styles
      refresh: true,
    }),
  ],
})
 /* Had to add       input: ['resources/css/app.css'], // Entry point for styles */
