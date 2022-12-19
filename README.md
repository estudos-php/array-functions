# A collection of useful array functions!

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laracraft-tech/array-functions.svg?style=flat-square)](https://packagist.org/packages/laracraft-tech/array-functions)
[![Tests](https://github.com/laracraft-tech/array-functions/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/laracraft-tech/array-functions/actions/workflows/run-tests.yml)
[![Check & fix styling](https://github.com/laracraft-tech/array-functions/workflows/fix-php-code-style-issues.yml/badge.svg?branch=main)](https://github.com/laracraft-tech/array-functions/actions/workflows/fix-php-code-style-issues.yml)
[![Licence](https://img.shields.io/packagist/l/laracraft-tech/array-functions.svg?style=flat-square)](https://packagist.org/packages/laracraft-tech/array-functions)
<!--[![Total Downloads](https://img.shields.io/packagist/dt/laracraft-tech/array-functions.svg?style=flat-square)](https://packagist.org/packages/laracraft-tech/array-functions)-->

In this small helper package, we will over time provide a collection of useful array functions,
which we use across our projects. 

## Installation

You can install the package via composer:

```bash
composer require laracraft-tech/array-functions
```

## Usage

The following functions are provided in the `LaracraftTech`-namespace:

### array_pull_with_key

```php
/**
 * Returns the pulled key-value pair from the given array,
 * and also removes it there.
 *
 * @param  array  $array
 * @param  string|int  $key
 * @param  mixed  $default
 * @return array
 */
array_pull_with_key([
    'a' => 1,
    'b' => 2,
    'c' => 3,
], 'b');
//return: ['b' => 2] (also works with nested keys)
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/laracraft-tech/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Zacharias Creutznacher](https://github.com/laracraft-tech)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
