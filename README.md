## License Manager
**License Manager** is a library build for laravel framework. It is intended to allow developers to be able to license their applications without having to create a licensing system of their own. **FYI : This library is still under heavy development and is not in a completed state! You will be able to do nothing with it right now.**

## Getting Started
***Coming Soon***

## Laravel version compatibility

| Laravel version | Package Version |
| :-------------: | :-------------: |
| 8.x.x           | 8.x.x           | 

## Service provider
Once Composer has installed or updated your packages you need to register this package. Open up `config/app.php` and find the providers key and add :

````php
 \Fathalfath30\LicenseManager\Middleware\LicenseManager::class
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
