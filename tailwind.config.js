/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/typography'),  // Tailwind Typography plugin
    require('flowbite-typography'),      // Flowbite Typography plugin
    require('flowbite/plugin')           // Flowbite plugin
  ],
}
