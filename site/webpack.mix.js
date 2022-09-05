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

mix.setPublicPath('./wp-content/themes/captair/public')
    .js('wp-content/themes/captair/resources/js/script.js', 'wp-content/themes/captair/public/js/')
    .sass('wp-content/themes/captair/resources/sass/style.scss', 'wp-content/themes/captair/public/css/')
    .options({
        processCssUrls: false
    })
    .browserSync({
        proxy: 'captair.test',
        notify: false
    })
    .version();
