<?php

use App\Http\Controllers\Democontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\homecontroller::class,'page']);

