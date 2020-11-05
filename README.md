## License Manager

<p align="center">
    <a href="https://github.com/fathalfath30/license-manager">
        <img alt="Travis (.org)" src="https://img.shields.io/travis/fathalfath30/license-manager">
    </a>
    <a href='https://packagist.org/packages/fathalfath30/license-manager'>
        <img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/fathalfath30/license-manager">
    </a>
    <a href='https://packagist.org/packages/fathalfath30/license-manager'>
        <img alt="Packagist Version" src="https://img.shields.io/packagist/v/fathalfath30/license-manager">
    </a>
    <a href='https://packagist.org/packages/fathalfath30/license-manager'>
        <img alt="Packagist License" src="https://img.shields.io/packagist/l/fathalfath30/license-manager">
    </a>
    <a href='https://packagist.org/packages/fathalfath30/license-manager'>
        <img src='https://img.shields.io/github/stars/fathalfath30/license-manager' alt='stars'/>
    </a>
    <a href='https://packagist.org/packages/fathalfath30/license-manager'>
        <img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/fathalfath30/license-manager?style=flat-square">
    </a>
</p>

**License Manager** is a library build for laravel framework. It is intended to allow developers to be able to license their applications without having to create a licensing system of their own. **FYI : This library is still under heavy development and is not in a completed state! You will be able to do nothing with it right now.**

## Getting Started
````shell script
composer require fathalfath30/license-manager
````

## Laravel version compatibility

| Laravel version | Package Version |
| :-------------: | :-------------: |
| 8.x.x           | 8.x.x           | 

## Service provider
Once Composer has installed or updated your packages you need to register this package. Open up `config/app.php` and find the providers key and add :

````php
 use Fathalfath30\LicenseManager\Middleware\LicenseManager;LicenseManager::class
````

## Configuration
Finally you need to publish a configuration file by running the following Artisan command :

````shell script
php artisan vendor:publish --tag="license_manager"
````

## Contributing
I'm not currently taking contributions from others due to the fact I am in early stages.

## License
This project is licensed under the [MIT License](https://github.com/fathalfath30/license-manager/blob/master/LICENSE).

## Third-party
- [guzzle/guzzle](https://github.com/guzzle/guzzle)
- [erusev/parsedown](https://github.com/erusev/parsedown)
- [bootstrap 4](https://getbootstrap.com/)
- [jquery](https://jquery.com/)
- [axios/axios](https://github.com/axios/axios)
- [polyfill](https://polyfill.io/v3/)
- [popper.js](https://popper.js.org/)
- [sweetalert2](https://sweetalert2.github.io/)
