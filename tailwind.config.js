const tailwindDefaults = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'body': ['"Diatype Variable"', ...tailwindDefaults.fontFamily.sans],
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#ffffff',
            'yellow': '#fff944',
            'blue': '#0000FF',
            'black': '#000000',
        },
        extend: {},
    },
    plugins: [],
}
