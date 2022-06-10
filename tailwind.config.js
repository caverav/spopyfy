module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      backgroundImage: {
        'pixel': "url('/assets/back.png')",
      },
      colors: {
        "primary": {
          "50": "#6c728c",
          "100": "#626882",
          "200": "#585e78",
          "300": "#4e546e",
          "400": "#444a64",
          "500": "#3a405a",
          "600": "#303650",
          "700": "#262c46",
          "800": "#1c223c",
          "900": "#121832"
        },
        "secondary": {
          "50": "#e0f7ff",
          "100": "#d6edff",
          "200": "#cce3ff",
          "300": "#c2d9ff",
          "400": "#b8cff5",
          "500": "#aec5eb",
          "600": "#a4bbe1",
          "700": "#9ab1d7",
          "800": "#90a7cd",
          "900": "#869dc3"
        },
        "tertiary": {
          "50": "#ffffff",
          "100": "#ffffff",
          "200": "#fffff5",
          "300": "#fff5eb",
          "400": "#ffebe1",
          "500": "#f7e1d7",
          "600": "#edd7cd",
          "700": "#e3cdc3",
          "800": "#d9c3b9",
          "900": "#cfb9af"
        }
      },
    },
  },
  plugins: [],
}
