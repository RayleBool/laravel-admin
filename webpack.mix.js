const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.styles([
        'resources/assets/css/styles.css',
        'resources/assets/css/semantic.css',
    ], 'public/css/backend-styles.css');

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/semantic.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .version();
