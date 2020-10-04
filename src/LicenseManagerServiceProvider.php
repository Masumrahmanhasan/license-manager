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

namespace Fathalfath30\LicenseManager;

use App\Http\Kernel;
use Fathalfath30\LicenseManager\Middleware\LicenseManager;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LicenseManagerServiceProvider extends ServiceProvider {
  private $config;

  public function register () {
    parent::register();
  }

  public function boot (Router $router, Kernel $kernel) {
    $this->publishes([
        __DIR__ . '/config/license_manager.php' => config_path('license_manager.php'),
    ], 'license_manager');

    $this->config = $this->app['config']->get('license_manager');
    $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

    foreach ( $this->config['middleware_group'] as $mGroup ) {
      $kernel->prependMiddlewareToGroup($mGroup, LicenseManager::class);
    }
  }
}
