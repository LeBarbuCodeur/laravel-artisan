# Laravel Artisan

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lebarbucodeur/laravel-artisan.svg?style=flat-square)](https://packagist.org/packages/lebarbucodeur/laravel-artisan)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/lebarbucodeur/laravel-artisan.svg?style=flat-square)](https://packagist.org/packages/lebarbucodeur/laravel-artisan)

`lebarbucodeur/laravel-artisan` is a Laravel package providing some Artisan commands in a view. Very useful if you put a Laravel application on a mutualised server like OVH.

## Available commands

- php artisan key:generate

## Requirements

- Laravel 9.x
- PHP 8.x

## Installation

You can install the package via composer:

``` bash
composer require lebarbucodeur/laravel-artisan
```

## Configuration

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

## Contributing

Since I'm getting some questions about this I want these things to be perfectly clear:

- This is a safe haven for contributions, every (positive) contributon matters!
- You are free (and encouraged) to use anything of this package for your own ideas.
- You can always ask for help or email me directly for any questions.

Please see [Contributing File](CONTRIBUTING.md) for further details.

## Credits

This package is possible because of the effort and time of these people! ✨

- [LeBarbuCodeur](https://github.com/LeBarbuCodeur)

## Version history

See the [dedicated change log](CHANGELOG.md)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
