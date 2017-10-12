const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix){
    mix.sass('app.scss')
       .webpack('app.js');
    mix.scripts(['jquery-3.2.0.min.js','jquery-ui.min.js','new_character/attribute.js', 'new_character/skills.js'],"public/js/new_char.js");
    mix.scripts(['jquery-3.2.0.min.js','jquery-ui.min.js','test/test.js'],"public/js/test1.js");
    mix.scripts(['jquery-3.2.0.min.js','jquery-ui.min.js','new_character/selected_char.js'],"public/js/charWidget.js");
});
