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
        'resources/assets/css/font-awesome.css',
        'resources/assets/css/jquery.dataTables.css',
        'vendor/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css',
        'vendor/bower_components/AdminLTE/dist/css/AdminLTE.min.css',
        'vendor/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css',
    ], 'public/css/backend-styles.css');

mix.scripts([
    'vendor/bower_components/AdminLTE/dist/js/app.min.js',
], 'public/js/backend-js.js');

mix.js('resources/assets/js/app.js', 'public/js')
   .js('vendor/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .version();
