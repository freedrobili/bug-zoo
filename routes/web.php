<?php

use App\Http\Controllers\ZooController;
use Illuminate\Support\Facades\Route;

Route::get('/', ZooController::class)->name('zoo.index');
