const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/search.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/header.scss', 'public/css')
    .sass('resources/sass/footer.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/search.scss', 'public/css')
    .sass('resources/sass/view.scss', 'public/css')
    .sass('resources/sass/login.scss', 'public/css')
    .sass('resources/sass/checkin.scss', 'public/css')
    .sass('resources/sass/contact.scss', 'public/css')
    .sass('resources/sass/shopcart.scss', 'public/css')
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/webfonts')
    .sourceMaps();
