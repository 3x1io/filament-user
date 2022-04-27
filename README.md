# Filament User Resource

User Resource For Filament Admin

## Installation

Before install looking for this packages and install it

- [filament-shield](https://github.com/bezhansalleh/filament-shield)

You can install the package via composer:

```bash
composer require 3x1io/filament-user
```

Publish Translation and config

```bash
php artisan vendor:publish --tag="filament-user-config"
php artisan vendor:publish --tag="filament-user-translations"
```

and now clear cache

```bash
php artisan optimize:clear
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [3x1](https://github.com/3x1io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
