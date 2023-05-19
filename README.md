# Larva Forge SDK

<a href="https://github.com/larvatecn/forge-sdk/actions"><img src="https://github.com/larvatecn/forge-sdk/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/larva/forge-sdk"><img src="https://img.shields.io/packagist/dt/larva/forge-sdk" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/larva/forge-sdk"><img src="https://img.shields.io/packagist/v/larva/forge-sdk" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/larva/forge-sdk"><img src="https://img.shields.io/packagist/l/larva/forge-sdk" alt="License"></a>

## Introduction

The [Larva Forge](https://forge.larva.com.cn) SDK provides an expressive interface for interacting with Forge's API and managing Laravel Forge servers.

## Official Documentation

### Installation

To install the SDK in your project you need to require the package via composer:

```bash
composer require larva/forge-sdk
```

### Upgrading

When upgrading to a new major version of Forge SDK, it's important that you carefully review [the upgrade guide](https://github.com/laravel/forge-sdk/blob/master/UPGRADE.md).

### Basic Usage

You can create an instance of the SDK like so:

```php
$forge = new Larva\Forge\Forge(TOKEN_HERE);
```

Using the `Forge` instance you may perform multiple actions as well as retrieve the different resources Forge's API provides:

```php
$servers = $forge->servers();
```

This will give you an array of servers that you have access to, where each server is represented by an instance of `Laravel\Forge\Resources\Server`, this instance has multiple public properties like `$name`, `$id`, `$size`, `$region`, and others.

You may also retrieve a single server using:

```php
$server = $forge->server(SERVER_ID_HERE);
```

## License

Larva Forge SDK is open-sourced software licensed under the [MIT license](LICENSE.md).
