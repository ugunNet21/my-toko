<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Admin.dashboard');
});

Route::get('/invoices', function(){
    return view('Admin.pages.invoices.index');
});

Route::get('/products', function(){
    return view('Admin.pages.products.index');
});
