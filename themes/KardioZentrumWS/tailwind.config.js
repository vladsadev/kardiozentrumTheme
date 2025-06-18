/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./*.php",
        "./template-parts/**/*.php",
        "./src/**/*.{js,jsx,ts,tsx,vue}"
    ],
    plugins: [
        require("@tailwindcss/typography"),
    ],
    theme: {
        extend: {
            colors: {
                red: {
                    lighter: '#E54E5D',
                    light: '#9E2A2B',
                    medium: '#721C1E',
                    dark: '#540B0E',
                },
                yellow: {
                    light: '#FDF0D5',
                    medium: '#FFF3B0',
                    dark: '#E09F3E',
                },
                blue: {
                    dark: '#335c67',
                    darkest: '#223b43',
                    darkest2: '#0a2233',
                }
            },
            fontFamily: {
                sans: ['Inter', 'system-ui', 'sans-serif'],
                serif: ['Merriweather', 'Georgia', 'serif'],
            },
        },
        container: {
            center: true,
            padding: {
                DEFAULT: "1.5rem",
                md: "2rem",
                lg: "3rem",
                xl: "4rem",
            },
        },
    },
}