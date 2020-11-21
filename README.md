# Soft-Logger - Simple logger for many constructions - Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rene-roscher/soft-logger.svg?style=flat-square)](https://packagist.org/packages/rservices/soft-logger)
[![Total Downloads](https://img.shields.io/packagist/dt/rservices/soft-logger.svg?style=flat-square)](https://packagist.org/packages/rservices/soft-logger)

This package can you using for many constructions.

## Installation

You can install the package via composer:

```bash
composer require rene-roscher/soft-logger
```

## Usage

``` php
\RServices\SoftLogger\SoftLoggerFacade::log($content = 'content', $file = 'logger.log', $type = 'ERROR');

or using the helper function

__log($content = 'content', $file = 'logger.log', $type = 'ERROR');
```

## Available helper functions:
- __log()
- __debug()
- __info()
- __error()
- log_path()

## Todo
- Events

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
