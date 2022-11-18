# Lumen PHP Framework

Laravel Lumen skeleton for application with the support of cookies and sessions, CSRF.

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## Software development under Windows

* [PHP](https://windows.php.net/download/) 7.4 VC15 x64 Non Thread Safe. Extract zip and add your PHP runtime directory to your Windows PATH environment variable by using  `sysdm.cpl` or `setx /M path "%path%;C:\php\"`
* [Composer](https://getcomposer.org/download/) Latest Windows Installer
* [TortoiseGit](https://tortoisegit.org/download/) Installer for Windows PC 
* [Visual Studio Code](https://code.visualstudio.com/download) for Windows System Installer and [PHP Tools](https://marketplace.visualstudio.com/items?itemName=DEVSENSE.phptools-vscode) for VS Code extension
* Optional [HeidiSQL](https://www.heidisql.com/download.php)

## Deployment

```sh
git config credential.helper store
sudo git clone https://github.com/osysltd/lumen/ .
git pull origin master
cp .env.example .env
composer install
composer dump-autoload --optimize
```

In case of `PHP Fatal error:  Allowed memory size of bytes exhausted (tried to allocate bytes)`
```sh
php -d memory_limit=-1 /usr/local/bin/composer install
```

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
