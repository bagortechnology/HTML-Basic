module.exports = {
  rules: {
    "@html-eslint/no-multiple-h1": "error",
  },
  
    plugins: ["@html-eslint"],
    overrides: [
      {
        files: ["*.html"],
        parser: "@html-eslint/parser",
        extends: ["plugin:@html-eslint/recommended"],
      },
    ],
  };