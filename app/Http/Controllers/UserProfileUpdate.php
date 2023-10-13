<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donar;
use Illuminate\Support\Facades\Auth;

class UserProfileUpdate extends Controller
{
    public function edit($id)
    {
        $datas = User::where('id', $id)->with('donar')->get();
        return view('components.frontend.userprofileupdate.edit', ['data' => $datas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::with('donar')->where('id', $id)->first();
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
        // $user->donar->image = $request->image;

        $user->save();
        $user->donar->save();
        $datas = User::with('donar')->get();
        return view('backend.roles.index', ['data' => $datas]);

        //    dd($request->all());
    }

}