<h1 align="center">Request Response Query</h1>

This package provides wrapper of Request Response Query for Lumen and Laravel.

Getting Started
---

Installation :

```
$ composer require tripteki/laravelphp-request-response-query
```

How to use it :

- Read the instruction [here](https://spatie.be/docs/laravel-query-builder/introduction).

- Put `Tripteki\RequestResponseQuery\Providers\RequestResponseQueryServiceProvider` to service provider configuration list.

- Publish config file in the root of your project's directory with running and put to register provider :

```
php artisan vendor:publish --tag=tripteki-laravelphp-request-response-query
```

```php
Tripteki\RequestResponseQuery\Providers\RequestResponseQueryServiceProvider::ignoreConfig();
```

Author
---

- Spatie ([@spatie](https://spatie.be))
- Trip Teknologi ([@tripteki](https://linkedin.com/company/tripteki))
- Hasby Maulana ([@hsbmaulana](https://linkedin.com/in/hsbmaulana))
