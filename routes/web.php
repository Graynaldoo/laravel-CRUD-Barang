<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return redirect('/barangs');
});

Route::resource('barangs', BarangController::class);
