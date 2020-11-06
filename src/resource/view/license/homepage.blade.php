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
--}}
@php
  $okIcon = '<i class="fa fa fa-check-circle text-success"></i>';
  $failIcon = '<i class="fa fa-times text-danger"></i>';
  $unknownIcon = '<i class="fa fa-question"></i>'

@endphp
@extends('licenseManager::layout.app')
@section('content')
  <div class='row mt-5'>
    <div class='col-12'>
      <div class='card'>
        <div class='card-header'>
          <h5>Preflight Check</h5>
        </div>
        <div class='card-body'>
          <div class='col-12 table-responsive'>
            <table class='table table-bordered'>
              <thead>
              <tr>
                <th>Extension</th>
                <th>Version</th>
                <th>Status</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>PHP</td>
                <td>7.1.3</td>
                <td>{!! version_compare(PHP_VERSION,'7.1.3','>=') ? $okIcon : $failIcon !!}</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
