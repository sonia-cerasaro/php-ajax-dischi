let mix = require('laravel-mix');

mix.sass('src/root/scss/master.scss', 'dist/css')

mix.js('src/root/js/main.js', 'dist/js').options({
processCssUrls: false
});
