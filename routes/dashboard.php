<?php

use Illuminate\Support\Facades\Route;


Route::get('login', function () {
    return view('dashboard.auth.login');
});