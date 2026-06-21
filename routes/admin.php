<?php

use Illuminate\Support\Facades\Route;
 
Route::livewire('/dashboard', 'admin.page.dashboard.index');
Route::livewire('customers', 'admin.page.dashboard.customers');
