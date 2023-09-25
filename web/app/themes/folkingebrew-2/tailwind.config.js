/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        green: {
          default: "#54b848",
          darker: "#3B9F2F",
          dark: "#326f2b",
        }
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
