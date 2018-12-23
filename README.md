<p align="center">
<a href="https://packagist.org/packages/aranyasen/laravel-adminer"><img src="https://poser.pugx.org/aranyasen/laravel-adminer/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/aranyasen/laravel-adminer"><img src="https://poser.pugx.org/aranyasen/laravel-adminer/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/aranyasen/laravel-adminer"><img src="https://poser.pugx.org/aranyasen/laravel-adminer/license" alt="License"></a>
</p>

# Introduction
Laravel 5 wrapper for [Adminer](https://github.com/vrana/adminer/).
Adminer is a fast single-file database manager/explorer tool written by Jakub Vrana. It's a great replacement for 
PhpMyAdmin (also supports PostgreSQL, SQLite, MS SQL, Oracle, Firebird, SimpleDB, Elasticsearch and MongoDB).
Check out the official [Adminer](https://www.adminer.org/) page more details.

## Installation
To use this package, run:
```
composer require aranysen/laravel-adminer
```
### To use Adminer to Laravel routes (e.g. /adminer), update `routes/web.php`:

To autologin Adminer with Laravel default connection:
```php
Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerAutologinController@index');
```

If you want to manually provide credentials on the UI instead:
```php
Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerController@index');
```

Of course, you can add any middleware of your choice to restrict usage:
```php
Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerAutologinController@index')
    ->middleware(['admin']);
```

### Disabling CSRF Middleware
Adminer doesn't work with VerifyCsrfToken middleware, so it has to be disabled on its route.
In `VerifyCsrfToken.php` disable CSRF by adding adminer route to `$except` array:
```php
protected $except = [
    'adminer'
];
```

### To add a new theme:
In `public/`:
```bash
$ wget https://raw.githubusercontent.com/vrana/adminer/master/designs/hever/adminer.css
```

###### Package inspired by: https://github.com/miroc/Laravel-Adminer