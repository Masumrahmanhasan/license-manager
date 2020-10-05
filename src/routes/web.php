<?php
/*
//
//  ______    _   _           _  __      _   _     ____   ___
// |  ____|  | | | |         | |/ _|    | | | |   |___ \ / _ \
// | |__ __ _| |_| |__   __ _| | |_ __ _| |_| |__   __) | | | |
// |  __/ _` | __| '_ \ / _` | |  _/ _` | __| '_ \ |__ <| | | |
// | | | (_| | |_| | | | (_| | | || (_| | |_| | | |___) | |_| |
// |_|  \__,_|\__|_| |_|\__,_|_|_| \__,_|\__|_| |_|____/ \___/
//
// Written by Fathalfath30.
// Email : fathalfath30@gmail.com
// Follow me on:
//  Github : https://github.com/fathalfath30
//  Gitlab : https://gitlab.com/Fathalfath30
//
*/

use Fathalfath30\LicenseManager\Controllers\About;
use Fathalfath30\LicenseManager\Controllers\RegisterLicense;
use Fathalfath30\LicenseManager\Controllers\UnregisterLicense;
use Illuminate\Support\Facades\Route;

Route::group([ 'prefix' => 'license', 'as' => 'license.' ],
    function () {
      // license manager homepage
      Route::get('', Fathalfath30\LicenseManager\Controllers\Homepage::class)
           ->name('homepage');

      // register license
      Route::group([ 'prefix' => 'register', 'as' => 'register-license.' ],
          function () {
            Route::get('', RegisterLicense::class);
            Route::post('', [ RegisterLicense::class, 'execute' ]);
          });

      // unregister license
      Route::group([ 'prefix' => 'unregister', 'as' => 'unregister-license.' ],
          function () {
            Route::get('', UnregisterLicense::class);
            Route::post('', [ UnregisterLicense::class, 'execute' ]);
          });

      // about class
      Route::get('about', About::class);
    });
