# Deprecated Laravel 6 helpers

![laravel-helpers](https://user-images.githubusercontent.com/10347617/40197729-f2a7b7de-5a1c-11e8-985a-9038bb5159bc.png)

<p align="center">
    <a href="https://styleci.io/repos/45746985"><img src="https://styleci.io/repos/75637284/shield" alt="StyleCI" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/laravel-helpers"><img src="https://img.shields.io/packagist/dt/laravel-helpers-helldar/laravel-helpers.svg?style=flat-square" alt="Total Downloads" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/laravel-helpers"><img src="https://poser.pugx.org/andrey-helldar/laravel-helpers/v/stable?format=flat-square" alt="Latest Stable Version" /></a>
    <a href="https://packagist.org/packages/andrey-helldar/laravel-helpers"><img src="https://poser.pugx.org/andrey-helldar/laravel-helpers/v/unstable?format=flat-square" alt="Latest Unstable Version" /></a>
    <a href="LICENSE"><img src="https://poser.pugx.org/andrey-helldar/laravel-helpers/license?format=flat-square" alt="License" /></a>
</p>


## Content

* [Installation](#installation)
* [Using](#using)
    * [artisan app:name](#artisan-app-name)
    * [str helpers](#str-helpers)
    * [arr helpers](#arr-helpers)
* [License](#license)


## Installation

To get the latest version of Laravel Helpers, simply require the project using [Composer](https://getcomposer.org):

```
composer require andrey-helldar/laravel-helpers
```

Instead, you may of course manually update your require block and run `composer update` if you so choose:

```json
{
    "require": {
        "andrey-helldar/laravel-helpers": "^1.0"
    }
}
```

If you don't use auto-discovery, add the `ServiceProvider` to the providers array in `config/app.php`:

```php
Helldar\LaravelHelpers\ServiceProvider::class,
```


## Using

### artisan app:name

Set the application namespace by console command:

```
php artisan app:name <YourWord>
```

### str helpers

Remote helpers returned:

* [array_add](https://laravel.com/docs/6.0/helpers#method-array-add)
* [array_collapse](https://laravel.com/docs/6.0/helpers#method-array-collapse)
* [array_divide](https://laravel.com/docs/6.0/helpers#method-array-divide)
* [array_dot](https://laravel.com/docs/6.0/helpers#method-array-dot)
* [array_except](https://laravel.com/docs/6.0/helpers#method-array-except)
* [array_first](https://laravel.com/docs/6.0/helpers#method-array-first)
* [array_flatten](https://laravel.com/docs/6.0/helpers#method-array-flatten)
* [array_forget](https://laravel.com/docs/6.0/helpers#method-array-forget)
* [array_get](https://laravel.com/docs/6.0/helpers#method-array-get)
* [array_has](https://laravel.com/docs/6.0/helpers#method-array-has)
* [array_last](https://laravel.com/docs/6.0/helpers#method-array-last)
* [array_only](https://laravel.com/docs/6.0/helpers#method-array-only)
* [array_pluck](https://laravel.com/docs/6.0/helpers#method-array-pluck)
* [array_prepend](https://laravel.com/docs/6.0/helpers#method-array-prepend)
* [array_pull](https://laravel.com/docs/6.0/helpers#method-array-pull)
* [array_random](https://laravel.com/docs/6.0/helpers#method-array-random)
* [array_set](https://laravel.com/docs/6.0/helpers#method-array-set)
* [array_sort](https://laravel.com/docs/6.0/helpers#method-array-sort)
* [array_sort_recursive](https://laravel.com/docs/6.0/helpers#method-array-sort-recursive)
* [array_where](https://laravel.com/docs/6.0/helpers#method-array-where)
* [array_wrap](https://laravel.com/docs/6.0/helpers#method-array-wrap)

### arr helpers

Remote helpers returned:

* [camel_case](https://laravel.com/docs/6.0/helpers#method-camel-case)
* [ends_with](https://laravel.com/docs/6.0/helpers#method-ends-with)
* [kebab_case](https://laravel.com/docs/6.0/helpers#method-kebab-case)
* [snake_case](https://laravel.com/docs/6.0/helpers#method-snake-case)
* [starts_with](https://laravel.com/docs/6.0/helpers#method-starts-with)
* [str_after](https://laravel.com/docs/6.0/helpers#method-str-after)
* [str_before](https://laravel.com/docs/6.0/helpers#method-str-before)
* [str_contains](https://laravel.com/docs/6.0/helpers#method-str-contains)
* [str_contains_all](https://laravel.com/docs/6.0/helpers#method-str-contains-all)
* [str_finish](https://laravel.com/docs/6.0/helpers#method-str-finish)
* [str_is](https://laravel.com/docs/6.0/helpers#method-str-is)
* [str_limit](https://laravel.com/docs/6.0/helpers#method-str-limit)
* [str_plural](https://laravel.com/docs/6.0/helpers#method-str-plural)
* [str_random](https://laravel.com/docs/6.0/helpers#method-str-random)
* [str_replace_array](https://laravel.com/docs/6.0/helpers#method-str-replace-array)
* [str_replace_first](https://laravel.com/docs/6.0/helpers#method-str-replace-first)
* [str_replace_last](https://laravel.com/docs/6.0/helpers#method-str-replace-last)
* [str_singular](https://laravel.com/docs/6.0/helpers#method-str-singular)
* [str_slug](https://laravel.com/docs/6.0/helpers#method-str-slug)
* [str_start](https://laravel.com/docs/6.0/helpers#method-str-start)
* [studly_case](https://laravel.com/docs/6.0/helpers#method-studly-case)
* [title_case](https://laravel.com/docs/6.0/helpers#method-title-case)


## License

This package is released under the [MIT License](LICENSE).
