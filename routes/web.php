<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    dd(Auspost::postage()->listDomesticLetterSizes());
});


Route::get('/redis', function () {
    $visits = Redis::Incr('visits');
    return $visits;
});