/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/**/*.{html,js}"],
  theme: {
    container: {
      center: true,
      padding: "2rem",
    },
    extend: {
      colors: {
        primary: "#666666",
        secondary: "#36bcab",
      },
      fontFamily: {
        oswald: "Oswald",
        poppins: "Poppins",
      },
    },
  },
  plugins: [],
};

