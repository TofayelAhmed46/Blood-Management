<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BloodSearchController extends Controller
{
    // public function index(Request $request){
    //     return view('components.frontend.layouts.bloodsearch');
    // }
    public function search(Request $request){
        // dd($request->blood_type);
        $datas = DB::table('users')
        ->select('users.name','donars.district','blood_groups.blood-group')
        ->join('donars','donars.user_id','users.id') 
        ->join('blood_groups','blood_groups.donar_id','donars.id') 
        ->where('donars.district',$request->district)       
        ->where('blood_groups.blood-group',$request->blood_type)       
        ->get();
        //  dd($datas);

        return view('components.frontend.search.searchdata',['data'=>$datas]);
    }
   

}
