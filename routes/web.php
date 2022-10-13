<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/search', function(Request $request){
//    dd($request);
    return response()->json([
        'param' => [
            'name' => $request->name,
            'city' => $request->city
        ]
    ]);
});

Route::get('/', function(){
    return view('listings',[
        'header' => 'Latest Listing',
        'listings' => Listing::all()
    ]);
});

// Single listing
Route::get('/listing/{listing}',function(Listing $listing){
    return view('listing',['listing' => $listing]);
});
//Route::get('/listing/{id}', function ($id){
//    return view('listing',[
//        'listing' => Listing::find($id)
//    ]);
//});
