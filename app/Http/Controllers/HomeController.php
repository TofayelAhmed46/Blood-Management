<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        if (Auth::id()) {
            $isadmin = Auth()->user()->is_admin;
            if ($isadmin == 1) {
                $user = User::get();
                $total_donar = count($user);

                // dd($total_donar);

                return view('admindashboard', ['donar' => $total_donar]);


            } else if ($isadmin == 0) {

                $datas = User::where('id', Auth::id())->with('donar')->get();
                return view('dashboard', ['data' => $datas]);
            } else {
                return redirect()->back();
            }
        }
    }
}
