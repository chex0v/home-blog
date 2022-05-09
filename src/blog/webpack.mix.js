const mix = require("laravel-mix")

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .css("resources/css/app.css", "public/css")
  .css("resources/css/materialize.css", "public/css")
  .sass("resources/scss/main.sass", "public/css")
  .js("resources/js/highlight.js", "public/js")
  .js("resources/js/materialize.js", "public/js")
  .js("resources/js/main.js", "public/js")
  .js("resources/js/app.js", "public/js")
  .postCss("resources/css/tailwind.css", "public/css", [require("tailwindcss")])
  .version()
