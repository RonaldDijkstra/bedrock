/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        green: "#54b848",
      },
      fontFamily: {
        'sans': ['Open Sans', 'sans-serif']
      },
    },
  },
  plugins: [],
};

export default config;
