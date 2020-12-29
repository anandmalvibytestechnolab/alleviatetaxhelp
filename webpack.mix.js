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
    // SASS-CSS
    .sass(`resources/sass/bootstrap.min.scss`, `public/css`)
    .sass(`resources/sass/owl.carousel.scss`, `public/css`)
    .sass(`resources/sass/style.scss`, `public/css`)
    .sass(`resources/sass/responsive.scss`, `public/css`)
    // JS
//    .js('resources/js/jquery.min.js', 'public/js')
//    .js('resources/js/app.js', 'public/js')
    .js('resources/js/bootstrap.bundle.min.js', 'public/js')
    .js('resources/js/owl.carousel.js', 'public/js')
//    .js('resources/js/jquery.easing.min.js', 'public/js')
    .js('resources/js/custom.js', 'public/js')
    .js('resources/js/custom_second.js', 'public/js')


//    .js('resources/js/home.js', 'public/js')
//    .js('resources/js/ccpa.js', 'public/js')
//    .sass('resources/sass/home.scss', 'public/css')
//    .sass('resources/sass/login.scss', 'public/css')
//    .js('resources/js/backend.home.js', 'public/js')
//    .sass(`resources/sass/platform.scss`, `public/css`)
;


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
