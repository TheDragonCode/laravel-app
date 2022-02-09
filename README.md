# Laravel `app:name` support

<img src="https://preview.dragon-code.pro/andrey-helldar/laravel-app.svg?brand=laravel" alt="Laravel App"/>

This package provides a backwards compatibility layer for Laravel 5.8 `app:name` command in the latest Laravel release.

<p align="center">
    <a href="https://packagist.org/packages/andrey-helldar/laravel-app"><img src="https://img.shields.io/packagist/dt/andrey-helldar/laravel-app.svg?style=flat-square" alt="Total Downloads" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/laravel-app"><img src="https://img.shields.io/github/v/release/andrey-helldar/laravel-app?label=stable&style=flat-square" alt="Latest Stable Version" /></a>
    <a href="LICENSE"><img src="https://img.shields.io/packagist/l/andrey-helldar/laravel-app.svg?style=flat-square" alt="License" /></a>
</p>


## Installation

To get the latest version, simply require the project using [Composer](https://getcomposer.org):

```
composer require andrey-helldar/laravel-app --dev
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require-dev": {
        "andrey-helldar/laravel-app": "^1.0"
    }
}
```


## Using

Set the application namespace by console command:

```
php artisan app:name <name>
```


## License

This package is released under the [MIT License](LICENSE).

The code is taken from the [Laravel Framework](https://github.com/laravel/framework/pull/27575).
