# Laravel Artisan

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lebarbucodeur/laravel-artisan.svg?style=flat-square)](https://packagist.org/packages/lebarbucodeur/laravel-artisan)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/lebarbucodeur/laravel-artisan.svg?style=flat-square)](https://packagist.org/packages/lebarbucodeur/laravel-artisan)
[![Build Status](https://github.com/lebarbucodeur/laravel-artisan/workflows/build/badge.svg)](https://github.com/lebarbucodeur/laravel-artisan/actions)

`lebarbucodeur/laravel-artisan` is a laravel package providing some Artisan commands in a view. Cool if you put a Laravel application on a mutualised server like OVH.

## Installation

You can install the package via composer:

``` bash
composer require lebarbucodeur/laravel-artisan
```

To bypass maintenance of the Artisan commands list page, you must add this line in the `app/Http/Middleware/PreventRequestsDuringMaintenance.php` file of your project :

``` php
protected $except = [
    '/artisan*',
];
```

## Usage

### Make a link to the Artisan list command page

Simply add this to your code :

``` html
<a href="{{ route('laravel-artisan.list') }}">Artisan page</a>
```

## Version history

See the [dedicated change log](CHANGELOG.md)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
