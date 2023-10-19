/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        backgroundImage: {
            'header': 'url("/public/img/illustration/header.png")',
        }
    },
  },
  plugins: [],
}

