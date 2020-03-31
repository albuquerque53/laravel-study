![](https://camo.githubusercontent.com/c4b3056564d4d97f40afa08cffefa26c2a695316/68747470733a2f2f7265732e636c6f7564696e6172792e636f6d2f6474666276766b79702f696d6167652f75706c6f61642f76313536363333313337372f6c61726176656c2d6c6f676f6c6f636b75702d636d796b2d7265642e737667)

# 007 - Working with Blade

Knowing the Laravel's view engine and creating a simple site with it

## What is Blade?

Blade is the Laravel's default view engine, it allows pure php code in html

## How to use

> Don't forget: The deafult views files are in 'resources/views/*.blade.php'

| Symbol | Usage             | Example          |
|--------|-------------------|------------------|
| @      | Functions/Methods | @if()/@endif     |
| {{ }}  | PHP Code          | {{ echo('Hi') }} |

### Creating 'master' layout with Yield

> This must be used when you have a 'header' or 'footer' that you want use in other pages

1. Create 'master' folder in your views folder
2. In master create your 'layout'.blade.php file
3. Put html header/footer and others in this file
4. In the 'dinamyc part' content (wich will be filled) type:
```
    @yield('content');
```
5. In your other page (wich you want the header/footer) use:
```
    @extends('site.master.layout');
    @section('content')
        <page dinamic content>
    @endsection
```
> Now your 'dinamic' page will use the content of your layout page

[-> Check the Docs <-](https://laravel.com/docs/7.x/blade#introduction)
