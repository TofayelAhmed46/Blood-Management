<?php

namespace App\Http\Controllers;

use App\Models\Donar;
use Illuminate\Http\Request;
use App\Models\User;

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

    // use App\Models\Customer;

    // // To retrieve all orders with their corresponding customers
    // $orders = Order::with('customer')->get();

    // // To retrieve a specific order with its corresponding customer
    // $order = Order::with('customer')->find($orderId);

    // // To access the customer data of an order
    // $customerName = $order->customer->name;
    /**
     * 
     * use App\Models\Order;
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
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
        $user = User::where('id', $id)->with('donar')->first();
        // dd($donar->donar->phone);r

        // dd($request->all());

        if (isset($request->image)) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('ui/frontend/assets/image'), $imageName);
            $user->donar->image = $imageName;
        }


       // dd($request->dob);
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
        return view('backend.roles.index',['data'=>$datas]);

    //    dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donar $donar)
    {
        //
    }
}