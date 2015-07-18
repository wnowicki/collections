# PHP Collections
by WNowicki

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Install

### Requirements
- `PHP >=5.5.0`

### Composer Installation
To install *collection* library you will need to use [Composer](http://getcomposer.org/) in your project. If you aren't using Composer yet, it's really simple!
```bash
curl -sS https://getcomposer.org/installer | php
```

### Collections Installation
```bash
php composer.phar require wnowicki/collections
```

## Example

```php
$collection = ObjectCollection::make('\Fruit');

$collection->add(new Apple())
    ->add(new Orange())
    ->add(new Apple());
```

## Change Log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email dev@wojciechnowicki.com instead of using the issue tracker.

## Credits

- [Wojciech Nowicki][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/wnowicki/collections.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/wnowicki/collections/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/wnowicki/collections.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/wnowicki/collections.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/wnowicki/collections.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/wnowicki/collections
[link-travis]: https://travis-ci.org/wnowicki/collections
[link-scrutinizer]: https://scrutinizer-ci.com/g/wnowicki/collections/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/wnowicki/collections
[link-downloads]: https://packagist.org/packages/wnowicki/collections
[link-author]: https://github.com/wnowicki
[link-contributors]: ../../contributors
