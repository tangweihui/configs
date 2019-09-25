Configs
=======

[![Downloads](https://packagist.org/packages/etocrm/configs)


## Installations

To install Configs, run the command below and you will get the latest
version

```php
composer require etocrm/configs
```

add the ServiceProvider to the providers array in `config/app.php`
```php
Etocrm\Configs\ConfigsServiceProvider::class
```

call the Config::load() method within the boot method in `app/Providers/AppServiceProvider.php`:
```php
Configs::load();
```

To publish the config settings in Laravel 5 use:

```php
php artisan vendor:publish --provider="Etocrm\Configs\ConfigsServiceProvider"
```


## Documentation

no time for any documents ahhhhh
