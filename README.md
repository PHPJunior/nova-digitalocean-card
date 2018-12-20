# Nova Digitalocean Card

[![Latest Stable Version](https://poser.pugx.org/php-junior/nova-digitalocean-card/v/stable)](https://packagist.org/packages/php-junior/nova-digitalocean-card)
[![Total Downloads](https://poser.pugx.org/php-junior/nova-digitalocean-card/downloads)](https://packagist.org/packages/php-junior/nova-digitalocean-card)

![screenshot 1](s1.png)

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require php-junior/nova-digitalocean-card
```

## Usage
```php
return [
    new \PhpJunior\NovaDigitaloceanCard\DigitaloceanIncidentsCard(),
    new \PhpJunior\NovaDigitaloceanCard\DigitaloceanUnresolvedIncidentsCard(),
    new \PhpJunior\NovaDigitaloceanCard\DigitaloceanStatusCard(),
];
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
