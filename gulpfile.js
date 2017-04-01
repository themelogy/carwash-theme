var gulp = require('gulp');
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var themeInfo = require('./theme.json');

elixir.config.publicPath = 'assets';

var Task = elixir.Task;

elixir.extend('stylistPublish', function() {
    new Task('stylistPublish', function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    });
});

elixir(function (mix) {

    mix.sass('bootstrap.scss', 'resources/assets/css/bootstrap.min.css')
       .sass(['foundation.scss'], 'resources/assets/css/foundation.min.css', 'assets/vendor/foundation/scss')
       .less(['semantic.less'], 'resources/assets/css/semantic-ui.min.css', 'assets/vendor/semantic/src');

    mix.copy('assets/vendor/jquery/dist/jquery.min.js', 'resources/assets/js')
        .copy('assets/vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js', 'resources/assets/js')
        .copy('assets/vendor/foundation/js/foundation.min.js', 'resources/assets/js')
        .copy('assets/vendor/semantic/dist/semantic.min.js', 'resources/assets/js')
        .copy('assets/vendor/bootstrap-sass/assets/fonts', 'assets/fonts')
        .copy('assets/vendor/slider-revolution/src', 'assets/js/plugins/slider-revolution')
        .copy('assets/vendor/slider-revolution/src', 'assets/css/plugins/slider-revolution')
        .copy('resources/assets/css', 'assets/css')
        .copy('resources/assets/js', 'assets/js');

    mix.styles([
        'bootstrap.min.css',
        'foundation.min.css'
    ]);

    mix.scripts([
        'jquery.min.js',
        'foundation.min.js',
        'semantic.min.js'
    ]);

    mix.version([
        'css/bootstrap.min.css',
        'css/foundation.min.css',
        'js/jquery.min.js',
        'js/foundation.min.js',
        'js/semantic.min.js'
    ], 'assets');

    mix.stylistPublish();

});