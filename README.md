# Laravel `app:name` support

![the dragon code laravel app](https://preview.dragon-code.pro/the-dragon-code/laravel-app.svg?brand=laravel)

This package provides a backwards compatibility layer for Laravel `app:name` command in the latest Laravel release.

[![Stable Version][badge_stable]][link_packagist]
[![Total Downloads][badge_downloads]][link_packagist]
[![License][badge_license]][link_license]


## Installation

To get the latest version, simply require the project using [Composer](https://getcomposer.org):

```bash
composer require dragon-code/laravel-app --dev
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require-dev": {
        "dragon-code/laravel-app": "^1.0"
    }
}
```

## Using

Set the application namespace by console command:

```bash
php artisan app:name <name>
```

## License

This package is released under the [MIT License](LICENSE).

The code is taken from the [Laravel Framework](https://github.com/laravel/framework/pull/27575).


[badge_downloads]:  https://img.shields.io/packagist/dt/dragon-code/laravel-app.svg?style=flat-square

[badge_license]:    https://img.shields.io/packagist/l/dragon-code/laravel-app.svg?style=flat-square

[badge_stable]:     https://img.shields.io/github/v/release/TheDragonCode/laravel-app?label=stable&style=flat-square

[link_packagist]:   https://packagist.org/packages/dragon-code/laravel-app
