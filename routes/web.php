<?php

use Laravel\Pennant\Feature;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Process;

//Test for Laravel Pennant

auth()->onceUsingId(3);

Route::get('/', function () {
    Feature::activate('ui-design');
    return view('welcome');
});




Route::get('/password', function () {

    return str()->password(12, numbers: false);
});


Route::get('/process', function () {

    //in macos / linux
    // $result = Process::run('ls -la');

    // in windows os
    $result = Process::run('dir');

    // this will output the list of files in the current direct
    return $result->output();

    // other methods on the process facade
    $result->successful();
    $result->failed();
    $result->output();
    $result->exitCode();
    $result->errorOutput();
    $result->throw();
});
