const plugin = require('tailwindcss/plugin');

/**
 * Add variants for Tailwind.
 *
 * @return {array}  Returns a list of addVariant functions
 */
const getPlugins = () => [
  plugin(({ addVariant }) => {
    addVariant('mobile-nav-open', '.mobile-navigation-open &');
  }),
];

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
    plugins: getPlugins(),
});
