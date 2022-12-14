<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // show all listing
    public function index(){
        return view('listings.index',[
//            'listings' => Listing::all()
            'listings' => Listing::latest()->filter(request(['tag','search']))->get()
        ]);
    }

    // show single listing
    public function show(Listing $listing){
        return view('listings.show',['listing' => $listing]);
    }

    // Show Create Form
    public function create(){
        return view('listings.create');
    }

    // Store Listing
    public function store(Request $request){
//        dd($request->all());
        $validate_form_fields = $request->validate([
            'title' => 'required',
            'company' => ['required',Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'description' => 'required'
        ]);

        redirect('/');
    }
}

