module.exports = {
  purge: [
    './**/*.php', // Add any other file extensions you're using in your project
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        // Add your custom colors here
        primary: '#8AB092',
        darkPrimary: 'rgb(18, 41, 27)'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
