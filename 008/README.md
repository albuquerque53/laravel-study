![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 008 - Assets with Laravel-Mix

> How to work with assets in views folder

## Using a CSS or JS on blade file on the right way

### Directories that will be used

| Path             | Usage                           |
|------------------|---------------------------------|
| resources/views/ | Where you code your frontend    |
| public/          | Where you frontend is displayed |

> ***Warning*** you can never edit directly views folder

1. Create a your files estructure (.html, .js, .css)
2. Create your page, script and style
3. Run ```npm install``` to install laravel-mix dependence
4. Go to webpack.mix.js file and edit:
```
mix
    .styles([
        'your/css/file/in/views',
    ], 'where/you/want/your/file/in/public')

    .scripts([
        'your/js/file/in/views'
    ], 'where/you/want/your/file/in/public')

    .value(); // For generate hash to reload files with html
```


5. Run ```npm run dev```
6. See your files 'linked' in public folder
7. Edit your html in views with ```<links>``` and ```<scripts>``` tags with the src: 
```
{{ url( mix('/your/js-css/file/in/public') ) }}
```
> Example:
```
<link rel="stylesheet" href="{{ url( mix('adm-content/css/style.css') ) }}" />
```
8. For each edit css/js file run ```npm run dev```

### NPM usages in laravel-mix:
| CMD     | Argument   | Action                                 |
|---------|------------|----------------------------------------|
| npm run | dev        | Run all mix tasks                      |
| npm run | production | Run all mix tasks and minify output    |
| npm run | watch      | Run all mix tasks and continue running |

[-> Check the Docs <-](https://laravel.com/docs/7.x/mix)

