module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    textColor: theme => ({
      ...theme('colors'),
      'megacar-primary': '#9C3A73',
     }),
    backgroundColor: theme => ({
      ...theme('colors'),
      'megacar-primary': '#9C3A73',
     }),
     borderColor: theme => ({
      ...theme('colors'),
      'megacar-primary': '#750D4A',
     }),
    fontFamily: {
      'megacar-font': ['Abel', 'sans-serif'] // Ensure fonts with spaces have " " surrounding it.
    },
    extend: {
      backgroundImage: theme => ({
        'megacar-image': "url('/sys/images/megacar.jpg')",
       }),
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
