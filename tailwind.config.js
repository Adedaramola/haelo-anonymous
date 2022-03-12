const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue'
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Space Grotesk', ...defaultTheme.fontFamily.sans],
        },
    },
  },
  plugins: [],
}
