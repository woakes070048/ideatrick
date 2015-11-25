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
    	'app.min.js',
    	'app.src.js',
    	'ui-client.js',
    	'ui-form.js',
    	'ui-jp.config.js',
    	'ui-jp.js',
    	'ui-load.js',
    	'ui-nav.js',
    	'ui-toggle.js',
    	'ui-waves.js',
    	'vue.min.js',
        'natural-lang.js'
    	],'public/assets/js/vendor.js');

    mix.styles([
        'admin.css',
        'app.css',
        'font.css',
        'home.css',
        'material-design-icons.css'
    ], 'public/assets/css/vendor.css');
});
