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
use Illuminate\Foundation\Application as Laravel;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LicenseManagerServiceProvider extends ServiceProvider
{
  private $config;

  protected function setupConfig()
  {
    $source = realpath(__DIR__ . './config/license-manager.php');
    if( $this->app instanceof Laravel && $this->app->runningInConsole() ) {
      $this->publishes([
        $source => config_path('license-manager.php')
      ], 'license_manager');
    }

    $this->mergeConfigFrom($source, 'license-manager');
    $this->config = $this->app['config']->get('license-manager');
  }

  public function boot(Router $router, Kernel $kernel)
  {
    $this->setupConfig();

    $this->loadRoutesFrom(__DIR__ . './routes/web.php');
    foreach( $this->config['middleware_group'] as $mGroup ) {
      $kernel->prependMiddlewareToGroup($mGroup, LicenseManager::class);
    }
  }
}
