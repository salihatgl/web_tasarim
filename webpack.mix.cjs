let mix = require('laravel-mix');

mix.js(['resources/js/deneme.js', 'resources/js/deneme2.js'], 'dist/app.js');

mix.scripts([
    'path/dir/mix.js',
    'path/dir/mix2.js'
],'all-files1.js');

mix.scripts(require('./resources/saliha/script_dosyalari.js'), 'public/assets/js/scripts.bundle.js');