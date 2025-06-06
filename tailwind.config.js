import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                montserrat: ["Montserrat", 'sans-serif'],
                poppins: ["Poppins", 'sans-serif']
            },
            colors: {
                azul: "#213772",
                verde: "#117561",
                naranja: "#F26700",
                azulado: "#425E96",
                verdeOscuro: "#425424",
                rojo: "#9E1F0E",
            },
            backgroundImage: {
                fondo: "url('/public/storage/img/bg.png')",
                banner1: "url('/public/storage/img/banners/banner1.jpg')",
                banner2: "url('/public/storage/img/banners/banner2.jpg')",

                CuidadoPersonal: "url('/public/storage/img/categories/1.jpg')",
                Electrodomesticos:
                    "url('/public/storage/img/categories/2.jpg')",
                Electronica: "url('/public/storage/img/categories/3.jpg')",
                Salud: "url('/public/storage/img/categories/4.jpg')",
                Herramientas: "url('/public/storage/img/categories/5.jpg')",
                ProductosDigitales: "url('/public/storage/img/categories/6.jpg')",
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ['hover', 'focus'],
            borderColor: ['focus'],
        },
    },
    plugins: [forms, typography],
};
