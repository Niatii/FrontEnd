/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    
    fontFamily: {
      sans: ['Inter', 'sans-serif'],
    },
    extend: {
      colors: {
        'blue': '#5268B9',
        'white': '#D9D9D9',
        'bluem': '#CEE0F0',
      },
    },
  },
  plugins: [],
}

