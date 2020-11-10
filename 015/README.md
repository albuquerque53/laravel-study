<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Tests In Laravel

## Testing?

The tests are an important part of the system development process, without the tests you don't know if your application is working properly

### There are some types of tests

1. Unit tests
2. Feature tests
3. Application tests
4. Regression tests

## Directories structure

In Laravel, all the tests are in ```tests``` folder (in the root of project)
In there, you'll find out two files: ```CreatesApplication.php``` and ```TestCase.php```

* The CreatesApplication class will start the test enviorment with all necessary settings
* The TestCase is an abstract class and uses the CreatesApplication and will extend to our tests classes  

## Working with tests

1. To create a test, run in console the following:
```
php artisan make:test <TestName>Test
```
:warning: **The name MUST end with 'Test' Word** :warning:

2. You'll find out your test file in ```tests/Feature/<TestName>Test.php```
> If you wanna Test units of code (such a specific methods or classes) use the --unit flag
