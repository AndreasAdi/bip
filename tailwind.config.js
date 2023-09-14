import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                big_noodle_titling: [
                    "big_noodle_titling",
                    ...defaultTheme.fontFamily.sans,
                ],
                arial_black: ["arial_black", ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                slide: "url('/images/1.jpg')",
            },
            transitionDuration: {
                5000: "5000ms",
            },
            colors: {
                "bip-blue": {
                    50: "#f1f6ff",
                    100: "#e5edff",
                    200: "#cfe1ff",
                    300: "#a8c3ff",
                    400: "#789eff",
                    500: "#416bff",
                    600: "#1b41ff",
                    700: "#0931f8",
                    800: "#0729d0",
                    900: "#0823aa",
                    950: "#011563",
                },
                "bip-orange": {
                    50: "#fff4ed",
                    100: "#ffe5d4",
                    200: "#ffc7a8",
                    300: "#ffa071",
                    400: "#ff7542",
                    500: "#fe4711",
                    600: "#ef2d07",
                    700: "#c61d08",
                    800: "#9d190f",
                    900: "#7e1810",
                    950: "#440806",
                },
            },
        },
    },
    corePlugins: {
        aspectRatio: false,
    },
    plugins: [
        forms,
        require("flowbite/plugin"),
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/typography"),
        require("@pyncz/tailwind-mask-image"),
    ],
};
