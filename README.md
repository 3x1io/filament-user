![Screenshot of Login](./art/screenshot.png)

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

## Publish Resource

you can publish the resource to your project

```bash
php artisan filament-user:publish
```

it will publish the resource to your project

than go to `filament-user.php` config file and change the `publish_resource` to `true`


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Fady Mondy](https://github.com/3x1io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
