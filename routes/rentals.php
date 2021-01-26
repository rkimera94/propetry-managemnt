<?php

use Illuminate\Support\Facades\Route;

/**
 * rentals routes 
 */

Route::get('/rental-mgt/rentals',function(){
    return view('portal.education.rentals'); 
})->name('rentals');