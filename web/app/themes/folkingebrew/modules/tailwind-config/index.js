const plugin = require('tailwindcss/plugin');

/**
 * Generate a Tailwind config object
 *
 * @return {object}  Returns a Tailwind config object
 */
exports.getTailwindConfig = () => ({
    content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
    theme: {
      extend: {
        colors: {
          green: "#54b848",
          "dark-green": "#326f2b",
        }
      },
      fontFamily: {
        'sans': ['Open Sans', 'sans-serif']
      }
    },
    plugins: [],
});
