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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
            },
            colors: {
                'custom-dark-1': '#171D1C',
                'custom-dark-2': '#262F2D',
                'custom-teal': '#14B8A6',
                'custom-teal1': '#1df1da',
                'custom-gradient-start': '#4ADE80',
                'custom-gradient-end': '#14B8A6',
            },
            boxShadow: {
                'glow-teal1': '0 4px 15px 0 #1df1da',
            },
            backgroundImage: {
                'gradient-custom': 'linear-gradient(to right, #4ADE80, #14B8A6)',
            },
        },
    },
    plugins: [],
};
