<?php

use App\Models\Item;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Item::orderBy('id')->get();
});

Route::get('/items', function () {
    return Item::orderBy('id')->get();
});
