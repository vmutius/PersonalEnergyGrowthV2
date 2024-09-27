import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/livewire/flux-pro/stubs/**/*.blade.php",
        "./vendor/livewire/flux/stubs/**/*.blade.php",
    ],

    theme: {
        colors: {
            'primary': {
                '50': '#F7FCFC',
                '100': '#EBF7F7',
                '200': '#D1EDEC',
                '300': '#B6E3E1',
                '400': '#86CFCB',
                '500': '#5ebbb5',
                '600': '#4CA89E',
                '700': '#348C7C',
                '800': '#22705D',
                '900': '#13543F',
                '950': '#073623'
            },
            'secondary': {
                '50': '#F5FCFC',
                '100': '#E6F7F7',
                '200': '#C5ECED',
                '300': '#A3E1E3',
                '400': '#6BCACF',
                '500': '#3ab5bb',
                '600': '#2F9CA8',
                '700': '#207A8C',
                '800': '#155B70',
                '900': '#0C3D54',
                '950': '#052336'
            },'accents-red': {
                '50': '#FCF5F9',
                '100': '#F7E6F0',
                '200': '#EDC5D9',
                '300': '#E0A4BE',
                '400': '#C96987',
                '500': '#B33951',
                '600': '#A12F43',
                '700': '#852031',
                '800': '#6B1423',
                '900': '#4F0B15',
                '950': '#33050B'
            },'neutral': {
                '50': '#F7FAFA',
                '100': '#EDF2F2',
                '200': '#D7DFE0',
                '300': '#BECACC',
                '400': '#94A4A8',
                '500': '#6c7d82',
                '600': '#586D75',
                '700': '#3C5561',
                '800': '#28404F',
                '900': '#162A3B',
                '950': '#091826'
            }, 'accents-yellow': {
                '50': '#fef9e8',
                '100': '#fef0c3',
                '200': '#fee28a',
                '300': '#fdd147',
                '400': '#fac215',
                '500': '#eab308',
                '600': '#ca9a04',
                '700': '#a17c07',
                '800': '#85680e',
                '900': '#715a12',
                '950': '#423306',
            },
        },

        extend: {
            fontFamily: {
                Quicksand: ['Quicksand', 'sans-serif'],
                kaftan: ['Kaftan', 'serif'],
            },
        },
    },

    plugins: [forms, typography],
};