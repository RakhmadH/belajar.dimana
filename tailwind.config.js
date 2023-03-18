/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: ['"Bree Serif"', 'sans-serif']
    },
    extend: {
      colors: {
        'hijau-telur-asin': '#43ADB7',
        'abu-abu': '#EEEEEE',
        'abu-abu-hover': '#BCBCBC',
        
      },
    },
  },
  plugins: [],
}