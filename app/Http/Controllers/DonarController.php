<?php

namespace App\Http\Controllers;

use App\Models\Donar;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blood_group;

class DonarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = User::with('donar')->get();
        return view('backend.roles.index',['data'=>$datas]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.backend.layouts.datainsert');


    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        // User::with('donar')->get();
        $datas = User::where('id',$id)->with('donar')->get();

        //   dd($datas['name');
        // echo ("Hi tofayel How are you");
        return view('backend.roles.show',['data'=>$datas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // dd($id);
        $datas = User::where('id',$id)->with('donar')->get();

        return view('backend.roles.edit',['data'=>$datas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $user = User::with('donar')->findOrFail($id);
    

                //  dd($donarId);
        
       // dd($donar);
        if($user->donar!=null){

            if (isset($request->image)) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('ui/frontend/assets/image'), $imageName);
                $user->donar->image = $imageName;
            }


            $user->name = $request->name;
            $user->email = $request->email;
            $user->donar->phone = $request->phone;
            $user->donar->district = $request->district;
            $user->donar->thana = $request->thana;
            $user->donar->religion = $request->religion;
            $user->donar->gender = $request->gender;
            $user->donar->profession = $request->profession;
            $user->donar->dob = $request->dob;

            
            // $user->save();
            // $user->donar->save();
            // return redirect()->route('donardata');
            // $datas = User::with('donar')->get();
            // return view('backend.roles.index',['data'=>$datas]);

            }


            else{  
                 $user->name = $request->name;
                    $user->email = $request->email;
                      $donar= new Donar;
                      $imageName = "";
                      if (isset($request->image)) {

                        // $image_name = $request->image;
                        $imageName = time() . '.' . $request->image->extension();
                        $request->image->move(public_path('ui/frontend/assets/image'), $imageName);
                    }
                    Donar::create([
                        
                    'user_id' => $id,
                    'image' => $imageName,
                    'phone' => $request->phone,
                    'district' => $request->district,
                    'thana' => $request->thana,
                    'religion' => $request->religion,
                    'gender' => $request->gender,
                    'profession' => $request->profession,
                    'dob' => $request->dob
                     ]);
                   
                    //  $user->save();
                    // //  $datas = User::with('donar')->get();
                    // //  return redirect()->route('donardata');
                    // return redirect()->route('donardata');
              
            }

            $user->save();
            // $user->donar->save();
            return redirect()->route('donardata');
            
    }


    public function destroy(Donar $donar)
    {
        //
    }
}