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
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([

            'resources/sass/css/libs/blog-post.css',
         	'resources/sass/css/libs/bootstrap.css',
         	'resources/sass/css/libs/font-awesome.css',
         	'resources/sass/css/libs/metisMenu.css',
         	'resources/sass/css/libs/sb-admin-2.css'

        ],'./public/css/all.css')


        .scripts([

         	'resources/sass/js/libs/jquery.js',
         	'resources/sass/js/libs/bootstrap.js',
         	'resources/sass/js/libs/metisMenu.js',
         	'resources/sass/js/libs/sb-admin-2.js',
         	'resources/sass/js/libs/scripts.js',

        ], './public/js/all.js');