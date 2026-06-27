<?php

use Illuminate\Support\Facades\Route;


 
$template = app('info')->template_type;
 

Route::livewire('/home', 'customer.website.' .$template.'.page.home.index');
Route::livewire('/about', 'customer.website.' .$template.'.page.about.index');
Route::livewire('/contact', 'customer.website.' .$template.'.page.contact.index');
Route::livewire('/products', 'customer.website.' .$template.'.page.products.index');
 


Route::livewire('/dashboard', 'customer.website.' .$template.'.dashboard.page.index');

 

Route::livewire('/dashboard/settings', 'customer.website.' .$template.'.dashboard.settings.index');
Route::livewire('/dashboard/menu', 'customer.website.' .$template.'.dashboard.menu.index');
Route::livewire('/dashboard/media', 'customer.website.' .$template.'.dashboard.media.index');
Route::livewire('/dashboard/products', 'customer.website.' .$template.'.dashboard.products.index');






 