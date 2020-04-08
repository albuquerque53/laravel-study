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

mix
    /*
        Loading Bootstrap's Sass
    */
    //              Main file
    .sass('resources/views/scss/style.scss',
    //      Public file
    'public/site/style.css')

    /* 
        Loading Jquery:
    */
    //              Main file
    .scripts('node_modules/jquery/dist/jquery.js',
    //      Public file
    'public/site/jquery.js')

    /*
        Same to Bootstrap:
    */
    //              Main file
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    //      Public file
    'public/site/bootstrap.js')