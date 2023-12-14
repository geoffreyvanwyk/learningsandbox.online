// Using Laravel Mix is optional as the styles you need to get started are already included.
// However, if you add new Tailwind classes, or any customizations, you can use Webpack to
// compile the assets. See https://hydephp.com/docs/1.x/managing-assets.html.

let mix = require('laravel-mix');
require('laravel-mix-serve');

mix.js('resources/assets/app.js', 'app.js')
    .postCss('resources/assets/app.css', 'app.css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ]).setPublicPath('_media')
    .copy('_media/!(fonts/*)', '_site/media')
    .copyDirectory('_media/fonts', '_site/fonts');

mix.serve('php hyde serve', { hook: 'beforeCompile' });
