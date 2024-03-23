<?php

use App\Models\User;
use App\Events\TestEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    TestEvent::dispatch();
    return view('welcome');
});
