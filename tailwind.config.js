import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                "poppins": ['Poppins', 'sans-serif'],
            },
            colors: {
                crimson: {
                    50: "#FEF2F3",
                    100: "#FEE2E3",
                    200: "#fecacc",
                    300: "#fca5a9",
                    400: "#f77278",
                    500: "#ee454d",
                    600: "#dc2b33",
                    700: "#b81d24",
                    800: "#991b21",
                    900: "#7f1d21",
                }
            },
            spacing: {
                '1': '0.25rem',
                '2': '0.5rem',
                '3': '0.75rem',
                '4': '1rem',
                '5': '1.25rem',
                '6': '1.5rem',
                '8': '2rem',
                '10': '2.5rem',
                '12': '3rem',
                '16': '4rem',
                '20': '5rem',
                '24': '6rem',
                '32': '8rem',
                '40': '10rem',
                '48': '12rem',
                '56': '14rem',
                '64': '16rem',
            },
        },
    },

    plugins: [forms],
};
