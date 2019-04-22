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

mix.scripts([
	'public/js/jquery.js',
	'public/js/materialize.js',
	'resources/js/app.js'
	], 'public/js/app.js')
   .styles([
   		'public/css/materialize.css',
   		'public/css/style.css'
   	], 'public/css/app.css');

mix.browserSync({
	host: 'http://blog.test',
	proxy: 'http://blog.test'
})
