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

mix.js('resources/js/home.js', 'public/js')
    .sass('resources/sass/home.scss', 'public/css');


mix.options({processCssUrls: false})
    .sourceMaps(false, `source-map`);

//Live Reload, disabled in favor of npm run hot
//https://komelin.com/articles/configuring-webpack-livereload-laravelmix
let LiveReloadPlugin = require(`webpack-livereload-plugin`);
mix.webpackConfig({
    plugins: [
        new LiveReloadPlugin()
    ]
});
