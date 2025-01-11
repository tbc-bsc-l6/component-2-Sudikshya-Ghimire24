import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import aspectRatio from '@tailwindcss/aspect-ratio';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php', // For Blade templates
        './resources/js/**/*.vue',          // For Vue components
        './resources/js/**/*.jsx',          // For React components
        './resources/**/*.html',            // For static HTML
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#1E40AF',
                    light: '#3B82F6',
                    dark: '#1E3A8A',
                    100: '#A5B4FC', // Lighter shade
                    900: '#111827', // Darker shade
                },
                secondary: {
                    DEFAULT: '#D97706',
                    light: '#FBBF24',
                    dark: '#B45309',
                    100: '#FDE047', // Lighter shade
                    900: '#7F3600', // Darker shade
                },
                link: {
                    DEFAULT: '#FFFFFF',  // White color for links
                    hover: '#F3F4F6',    // Light shade for hover effect
                },
            },
            spacing: {
                '128': '32rem',
                '144': '36rem',
            },
            screens: {
                'xs': '400px',  // Add custom breakpoint
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
                '3xl': '1600px',
            },
        },
    },

    plugins: [
        forms,          // Adds styling for form elements
        typography,     // Adds utilities for rich text content
        aspectRatio,    // Adds utilities for controlling media aspect ratios
    ],
};
