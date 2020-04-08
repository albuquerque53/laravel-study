![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 009 - Bootstrap: The Right Way

> How to work with bootstrap 4 in Laravel

## Steps:
1. Install Jquery (Bootstrap dependence):
```
    npm install jquery
```
2. Use Laravel-Mix to load Jquery:
```
    // In webpack.mix.js:
    mix.scripts('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js')
```
3. Install Bootstrap:
```
    npm install bootstrap
```
4. Ass the bootstrap JS to webpack
```
    // webpack.mix.js file add
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/site/bootstrap.js')
```
5. Create a Sass file in your views folder and import bootstrap.scss
> This Sass file will references the boostrap main Sass
```
    /* style.scss file */
    @import "../../../node_modules/bootstrap/scss/bootstrap";
```
6. Again, add the scss to webpack (and convert to css)
```
    // webpack.mix.js
    .sass('resources/views/scss/style.scss', 'public/site/style.css')
```
[Take a look in my webpack.mix.js](https://github.com/g4br-4d3v/laravel-study/tree/master/009/webpack.mix.js)
7. Load all .js, .css files to /public with webpack:
```
    npm run dev
```
8. In the main file '.blade.php' in views, add the src of loaded files
```
<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="{{ asset('site/style.css') }}" />

<!-- Jquery Script -->
<script src="{{ asset('site/jquery.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('site/bootstrap.js') }}"></script>
```
[Take a look in my home.blade.php](https://github.com/g4br-4d3v/laravel-study/tree/master/009resources/views/home.blade.php)

### Finish
After that, you'll can use bootstrap in you Laravel application in the right way being able to use all the resources of this framework, like theming, for example.

### Extra: How to use theming?
With this bootstrap install, just edit the style.scss in views/ adding your theming config and after run ```npm run dev``` to load scss in public/

Check the Docs:
[JQuery install](https://jquery.com/download/)
[Bootstrap 4 install](https://getbootstrap.com/docs/4.4/getting-started/download/#package-managers)
[Laravel Mix](https://laravel.com/docs/7.x/mix#introduction)
[Bootstrap Theming](https://getbootstrap.com/docs/4.4/getting-started/theming/#introduction)