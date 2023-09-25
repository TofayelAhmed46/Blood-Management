<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodSearchController extends Controller
{
    public function index(Request $request){
        return view('components.frontend.layouts.bloodsearch');
    }
    public function search(Request $request){
        dd($request->all());
    }
}
