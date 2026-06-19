<?php

use Illuminate\Support\Facades\Route;


 
$template = app('info')->template_type;
 

Route::livewire('/home', 'customer.website.' .$template.'.page.home.index');
Route::livewire('/about', 'customer.website.' .$template.'.page.about.index');
Route::livewire('/contact', 'customer.website.' .$template.'.page.contact.index');
Route::livewire('/products', 'customer.website.' .$template.'.page.products.index');
 


Route::livewire('/dashboard', 'customer.website.' .$template.'.dashboard.home.index');

Route::livewire('/login', 'customer.website.' .$template.'.login.index');










 