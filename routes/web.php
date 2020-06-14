<?php

use Illuminate\Support\Facades\Route;

Ruote::livewire('/', 'home')->name('home');
Route::livewire('/products', 'products')->name('product.index');