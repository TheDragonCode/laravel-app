# Laravel 6 `app:name` support

This package provides a backwards compatibility layer for Laravel 5.8 `app:name` command in the latest Laravel release.

<p align="center">
    <a href="https://styleci.io/repos/208077137"><img src="https://styleci.io/repos/208077137/shield" alt="StyleCI" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/laravel-app"><img src="https://img.shields.io/packagist/dt/andrey-helldar/laravel-app.svg?style=flat-square" alt="Total Downloads" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/laravel-app"><img src="https://poser.pugx.org/andrey-helldar/laravel-app/v/stable?format=flat-square" alt="Latest Stable Version" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/laravel-app"><img src="https://poser.pugx.org/andrey-helldar/laravel-app/v/unstable?format=flat-square" alt="Latest Unstable Version" /></a>
    <a href="LICENSE"><img src="https://poser.pugx.org/andrey-helldar/laravel-app/license?format=flat-square" alt="License" /></a>
</p>


## Installation

To get the latest version of Laravel Helpers, simply require the project using [Composer](https://getcomposer.org):

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
