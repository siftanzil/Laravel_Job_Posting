<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Common Resources Routes:
// index - show all listings
// show - show single listing
// create - show form to create new listing
// store - show new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing

// All listings
Route::get('/', [ListingController::class, 'index']);

// Single listing(Eloquent)
Route::get('/listings/{listing}', [ListingController::class, 'show']);
