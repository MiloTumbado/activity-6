<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () { return redirect()->route('products.index'); });
Route::resource('products', 'ProductController')->only(['index','create','edit']);
