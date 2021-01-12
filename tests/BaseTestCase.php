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

namespace Fathalfath30\LicenseManager\Tests;

use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{
  private $client;
  private $defaultHeader;

  public function __construct(?string $name = null, array $data = [], $dataName = '')
  {
    parent::__construct($name, $data, $dataName);
    $this->client = new Client([
      'base_uri' => 'https://localhost:8000'
    ]);
    $this->defaultHeader = [];
  }

  protected function post(string $uri, array $data, array $header)
  {
    return $this->client->request('POST', $uri, [
      'headers' => array_merge($this->defaultHeader, $header)
    ]);
  }
}
