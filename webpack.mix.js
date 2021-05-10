const mix = require('laravel-mix');

mix.webpackConfig({
    resolve: {
        fallback: {
            fs: false,
            "path": false
        }
    }
});

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.setPublicPath('public');

// mix.js('resources/js/jquery-3.5.1.min.js','public/js');
// mix.js('resources/js/bootstrap.js','public/js')
// mix.js('resources/js/jquery.googlemap.js', 'public/js');
// mix.js('resources/js/jquery.magnific-popup.min.js','public/js');
// mix.js('resources/js/jquery.shuffle.min.js', 'public/js');
// mix.js('resources/js/masonry.pkgd.min.js','public/js');
// mix.js('resources/js/imagesloaded.pkgd.min.js','public/js');
// mix.js('resources/js/modernizr.custom.js','public/js');
// mix.js('resources/js/owl.carousel.min.js','public/js');
// mix.js('resources/js/validator.js','public/js');
mix.js('resources/js/main.js','public/js')
    .postCss('resources/css/main.css', 'public/css', []);
mix.sass('resources/sass/dc-custom.sass','public/css');
    // .postCss('resources/css/normalize.css','public/css')
    // .postCss('resources/css/animations.css', 'public/css')
    // .postCss('resources/css/bootstrap.min.css', 'public/css')
    // .postCss('resources/css/owl.carousel.css', 'public/css')
    // .postCss('resources/css/magnific-popup.css', 'public/css')
;
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         // require("tailwindcss"),
//     ]);

// mix.css('resources/css/main.css', 'public/css');
