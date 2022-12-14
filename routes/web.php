<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
use \App\Http\Controllers\ListingController;

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


Route::get('/search', function(Request $request){
//    dd($request);
    return response()->json([
        'param' => [
            'name' => $request->name,
            'city' => $request->city
        ]
    ]);
});

Route::get('/',[ListingController::class,'index']);

// Single listing
Route::get('/listing/{listing}',[ListingController::class,'show']);

//Show Create Form
Route::get('/listings/create',[ListingController::class,'create']);

// Store Listing
Route::post('/listings',[ListingController::class,'store']);
