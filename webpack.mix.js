let mix = require('laravel-mix');

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
//
// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.scss', 'public/css');


mix.combine([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/fontawesome-all.css',
    'resources/assets/css/themify-icons.css',
    'resources/assets/css/magnific-popup/magnific-popup.css',
    'resources/assets/css/jquery-ui.css',
    'resources/assets/css/owl-carousel/owl.carousel.css',
    'resources/assets/css/slit-slider/slit-slider.css',
    'resources/assets/css/slick-slider/slick.css',
    'resources/assets/css/nice-select.css',
    'resources/assets/css/base.css',
    'resources/assets/css/theme-color/theme-mediumseagreen.css',
    'resources/assets/css/default-theme.css',
    'resources/assets/css/responsive.css',
    'resources/assets/css/color-customize/color-customizer.css',
    'resources/assets/css/jquery.toast.css',
    'resources/assets/css/custom.css',
],'public/css/all.css');


mix.combine([
    'resources/assets/js/jquery.3.3.1.min.js',
    'resources/assets/js/popper.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery.appear.js',
    'resources/assets/js/modernizr.js',
    'resources/assets/js/jquery.nice-select.js',
    'resources/assets/js/jquery-ui.js',
    'resources/assets/js/search.js',
    'resources/assets/js/menu/jquery.smartmenus.js',
    'resources/assets/js/magnific-popup/jquery.magnific-popup.min.js',
    'resources/assets/js/owl-carousel/owl.carousel.min.js',
    'resources/assets/js/slit-slider/jquery.ba-cond.min.js',
    'resources/assets/js/slit-slider/jquery.slitslider.js',
    'resources/assets/js/slick-slider/slick.js',
    'resources/assets/js/parallax/parallaxie.min.js',
    'resources/assets/js/countdown/jquery.countdown.min.js',
    'resources/assets/js/isotope/isotope.pkgd.min.js',
    'resources/assets/js/contact-form/contact-form.js',
    'resources/assets/js/contact-form/jquery.validate.min.js',
    'resources/assets/js/wow.min.js',
    'resources/assets/js/color-customize/color-customizer.js',
    'resources/assets/js/theme-script.js',
    'resources/assets/js/jquery.validate.js',
    'resources/assets/js/jquery.toast.js',
    'resources/assets/js/costume.js',
],'public/js/all.js');