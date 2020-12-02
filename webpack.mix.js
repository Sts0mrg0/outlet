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
const  mix  = require('laravel-mix');

mix.scripts([
    'assets/js/bootstrap.bundle.min.js',
    'assets/js/jquery-2.0.0.min.js',
    'assets/js/script.js',
],'dist/js/app.js');

mix.sass('assets/scss/ui.scss', 'dist/css/app.css');

