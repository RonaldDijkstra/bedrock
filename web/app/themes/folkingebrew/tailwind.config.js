/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        green: "#54b848",
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
