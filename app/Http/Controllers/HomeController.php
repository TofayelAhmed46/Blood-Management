<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home(){
        if (Auth::id()){
            $isadmin=Auth()->user()->is_admin;
            if($isadmin==1){
                return view('admindashboard');
            }

           else if($isadmin==0){
                return view('dashboard');
            }

        }
        else return redirect()->back();
    }
}
