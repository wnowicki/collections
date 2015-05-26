# PHP Collections
by WNowicki

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/wnowicki/collections/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/wnowicki/collections/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/wnowicki/collections/badges/build.png?b=master)](https://scrutinizer-ci.com/g/wnowicki/collections/build-status/master)
[![SemVer]](http://semver.org)

## Install

### Requirements
- `PHP >=5.0.0`

### Composer Installation
To install *collection* library you will need to use [Composer](http://getcomposer.org/) in your project. If you aren't using Composer yet, it's really simple!
```bash
curl -sS https://getcomposer.org/installer | php
```

### Collections Installation
```bash
php composer.phar require wnowicki/collections:dev-master
```

## Example

```php
$collection = ObjectCollection::make('\Fruit');

$collection->add(new Apple())
    ->add(new Orange())
    ->add(new Apple());
```
