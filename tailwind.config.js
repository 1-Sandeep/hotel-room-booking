import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                'dancing-script': ['"Dancing Script"', 'cursive'],
                'poppins': ['Poppins', 'sans'],
                'raleway': ['Raleway', 'sans'],
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],

            },
        },
    },
    plugins: [],
};
