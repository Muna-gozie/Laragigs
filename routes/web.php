<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listings;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', function(Request $request){
//    dd($request);
    return response()->json([
        'param' => [
            'name' => $request->name,
            'city' => $request->city
        ]
    ]);
});

Route::get('/listings', function(){
    return view('listings',[
        'header' => 'Latest Listings',
        'listings' => Listings::all()
    ]);
});

// Single listing
Route::get('/listings/{id}', function ($id){
    return view('listing',[
        'listing' => Listings::find_one($id)
    ]);
});
