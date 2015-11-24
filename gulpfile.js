var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // mix.less('app.less');
    mix.scripts([
    	'vendor/app.min.js',
    	'vendor/app.src.js',
    	'vendor/ui-client.js',
    	'vendor/ui-form.js',
    	'vendor/ui-jp.config.js',
    	'vendor/ui-jp.js',
    	'vendor/ui-load.js',
    	'vendor/ui-nav.js',
    	'vendor/ui-toggle.js',
    	'vendor/ui-waves.js',
    	'vendor/vue.min.js'
    	], 'public/assets/general/js/vendor.js');
});
