/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/**/*.blade.php", // Ensures Tailwind scans Blade templates
    "./resources/css/app.css",
  ],
  theme: {
    extend: {
      colors: {
      },
    },
  },
  plugins: [],
}
