/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui"), require("tailwind-scrollbar-hide")],
    daisyui: {
        styled: true,
        themes: ["winter"],
    },
};
