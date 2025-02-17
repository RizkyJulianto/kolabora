import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        fontFamily: {
            primary: ["Mona Sans"],
        },
        extend: {
            colors: {
                primary: "#2563EB",
                primary_light: "#60A5FA",
                primary_dark: "#1D4ED8",
                orange_normal: "#F97316",
                orange_light: "#FB923C",
                orange_dark: "#C2410C",
                sky_normal: "#0284C7",
                sky_light: "#38BDF8",
                sky_dark: "#0369A1",
                yellow_normal: "#EAB308",
                yellow_light: "#FACC15",
                yellow_dark: "#A16207",
            },
        },
    },
    plugins: [],
};

