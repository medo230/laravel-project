<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products =DB::select('select * from products_categories');
        return view('admin.products.show', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view("admin.products.add",compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "category_id"=> "required",
            "name" => "required|unique:products,name|max:20|min:5",
            "image" => "required|mimes:jpg,png",
            "salary" => "required|integer"
        ], [
            "category_id.required" => "Please Select the category",
            "name.required" => "Please Enter the name",
            "name.unique" => "The name is inserted before",
            "salary.required" => "Please Enter the salary",
            "salary.integer" => "Please Enter number",


        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('web/images'), $imageName);
        $product =new Products();
        $product->name = $request->name;
        $product->salary = $request->salary;
        $product->category_id = $request->category_id;
        $product->image = $imageName;
        $product->save();
        return redirect()->route('products.create')->with('success', 'The product has been Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        return view("admin.products.edit",compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $product)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|max:20|min:5|unique:products,name,".$product->id,
            "image" => "mimes:jpg,png"
        ], [
            "name.required" => "Please Enter the name",
            "name.unique" => "The name is inserted before"
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
       if($request->image) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('web/images'), $imageName);
        unlink(public_path('web/images/'.$product->image));
        $product->image = $imageName;

       }
        $product->name = $request->name;
        $product->save();
        return redirect()->route('products.show',$product->id)->with('success', 'The product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        unlink(public_path('web/images/'.$product->image));
        $product->delete();
        return redirect()->route('products.index')->with('success', 'The product has been deleted');
    }
}
