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

mix.js(['resources/js/jquery.js','recources/js/jquery.min.js',
	'resources/js/bootstrap.js','resources/js/bootstrap.min.js',
	'resources/js/jquery.slim.js','resources/js/jquery.slim.min.js',
	'resources/js/bootstrap.bundle.js','resources/js/bootstrap.bundle.min.js',
	'resources/js/gulpfile.js','resources/js/app.js'], 'public/js');
    .sass(['resources/sass/app.scss','resources/sass/_variables.scss'], 'public/css');
    .styles(['resources/css/bootstrap.css','resources/css/bootstrap.min.css',
    	'resources/css/bootstrap-grid.css','resources/css/bootstrap-grid.min.css',
    	'resources/css/bootstrap-reboot.css','resources/css/bootstrap-reboot.min.css',
    	'recources/css/shop-homepage.css','resources/css/app.css'],'public/css');
