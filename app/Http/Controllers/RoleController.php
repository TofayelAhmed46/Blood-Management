<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    // public function index()
    // {
    //     $products = Product::get();
    //     return view('Products.index', ['products' => $products]);
    // }

    // public function create()
    // {
    //     return view('Products.create');
    // }

    // public function store(Request $request)
    // {

    //     $request->validate([
    //         'name' => 'required',
    //         'discription' => 'required',
    //         'image' => 'required|mimes:png,jpg,jpeg,gif|max:10000'
    //     ]);

    //     $imageName = time() . '.' . $request->image->extension();
    //     $request->image->move(public_path('product'), $imageName);


    //     $product = new Product;
    //     $product->image = $imageName;
    //     $product->name = $request->name;
    //     $product->discription = $request->discription;

    //     $product->save();
    //     return back()->withSuccess("Product Created succefully !!!");

    //     // return view('Products.create');

    // }
    // public function edit($id)
    // {
    //     $product = Product::where('id', $id)->first();
    //     return view('products.edit', ['product' => $product]);
    // }

    // public function update(Request $request, $id)
    // {
    //     // dd($request->all());

    //     $request->validate([
    //         'name' => 'required',
    //         'discription' => 'required',
    //         'image' => 'nullable|mimes:png,jpg,jpeg,gif|max:10000'
    //     ]);
    //     $product = Product::where('id', $id)->first();

    //     if (isset($request->image)) {

    //         $imageName = time() . '.' . $request->image->extension();
    //         $request->image->move(public_path('product'), $imageName);
    //         $product->image = $imageName;
            
    //     }



    //     $product->name = $request->name;
    //     $product->discription = $request->discription;

    //     $product->save();
    //     return back()->withSuccess("Product Updated succefully !!!");
    //     //return view('products.index');
    // }

    // public function destroy($id){
    //     dd($id);
    //     $product = Product::where('id', $id)->first();
    //     $product->delete();
    //     return back()->withSuccess("Product Deleted Successfully!!!");
    // }

    public function index()
    {
        $roles =new Role;
        $tt=$roles->get();
        return view('backend.roles.index',['role_value' => $tt]);
    }

    public function create()
    {
        return view('backend.roles.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'Roles' => 'required|unique'
        ]);

        

        $role = new Role;
        $role->roles = $request->role_name;
        $role->save();
    }
    // return redirect()->route('roles.index');


    public function show(Request $request)
    {
        return view('backend.roles.show', compact('role'));
    }

    public function edit(Role $role)
    {
        return view('backend.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        $role->update([
            'role_name' => $request->role_name
        ]);
        return redirect()->route('roles.index');
    }

    public function destroy(Role $role)
    {
        //
    }
}
