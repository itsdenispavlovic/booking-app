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

mix.js('resources/js/app.js', 'public/js').version()
    .styles([
        'resources/css/theme/style.css',
        'resources/css/theme/color.css'
    ], 'public/css/styles.css').version()
    .scripts([
        'resources/js/theme/plugins.js',
        'resources/js/theme/reveal-home.js',
        'resources/js/theme/custom.js'
    ], 'public/js/scripts.js').version()
    .sass('resources/sass/app.scss', 'public/css').version()
    .sourceMaps();

