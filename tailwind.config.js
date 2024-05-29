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
        themes: ["bumblebee"],
        themes: [
            {
                mytheme: {
                    primary: "#10A5F5",

                    secondary: "#ff00ff",

                    accent: "#00ffff",

                    neutral: "#ff00ff",

                    "base-100": "#ffffff",

                    info: "#0000ff",

                    success: "#00ff00",

                    warning: "#00ff00",

                    error: "#ff0000",
                },
            },
        ],
    },
};
