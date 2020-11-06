{{--
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
--}}<!doctype html>
<html lang='{{ app()->getLocale() }}'>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ env('APP_NAME', 'Fathalfath30') }} :: License Manager</title>

  <link rel='stylesheet' href='{{ asset('license-manager/vendor/bootstrap/css/bootstrap.min.css') }}' />
  <link rel='stylesheet' href='{{ asset('license-manager/vendor/fontawesome/css/all.min.css') }}'>

  {{-- other css --}}
  @stack('css')
</head>
<body>
<div class='container'>
  <div class='row'>
    <div class='col-lg-12'>
      <h4>{{ env('APP_NAME','Fathalfath30') }} :: License Manager</h4>
    </div>
  </div>

  {{-- main content --}}
  @yield('content')
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type='text/javascript' src='{{ asset('license-manager/vendor/jquery/jquery-3.2.1.slim.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('license-manager/vendor/popper/popper.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('license-manager/vendor/bootstrap/js/bootstrap.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('license-manager/vendor/fontawesome/js/all.min.js') }}'></script>

{{-- other javascript --}}
@stack('javascript')
</body>
</html>
