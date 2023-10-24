/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",

  ],
  theme: {
    extend: {
        colors: {
            "primary": "#5B4F47",
            "secondary": "#f6d860",
            "accent": "#37cdbe",
            "neutral": "#3d4451",
            "base-100": "#ffffff",
            'hijau': '#1D7151',
            'kuning': '#F2EDDB',
            'coklat' : '#5B4F47',
            'primary': '#F8F7F4 ',
            'orange': '#EB5436'
          },
    },
  },
  plugins: [require("daisyui")],

  daisyui: {
    themes: [
        "light"],
  },
}

