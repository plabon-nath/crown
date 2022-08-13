const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Ubuntu', ...defaultTheme.fontFamily.sans],
            },
            backdropBlur: {
                xs: '2px',
            }
        },

        lineClamp: {
            1:'1',
            2:'2',
            3:'3',
            7: '7',
            8: '8',
            9: '9',
            10: '10',
        },
    },
    layer: {
        lineClamp: ['responsive', 'hover']
    },

    plugins: [
        require('@tailwindcss/line-clamp'),
        require('@tailwindcss/typography'),
        require("@tailwindcss/forms")({
            strategy: 'class',
        }),
        require('@tailwindcss/aspect-ratio'),
        // require('tw-elements/dist/plugin'),

    ],
};
