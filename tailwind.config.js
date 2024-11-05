module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'otomanopee': ['"Otomanopee One"', 'sans-serif'],
        'amaranth': ['Amaranth', 'sans-serif'],
        'instrument': ['"Instrument Sans"', 'sans-serif'],
      },
      colors: {
        'primary': '#f79576',
        'primary-light': '#ffdcc9',
        'primary-dark': '#f57c54',
      },
    },
  },
  plugins: [],
}