<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view("admin.categories.show",compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.categories.add");
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
            "name" => "required|unique:categories,name|max:20|min:5",
            "image" => "required|mimes:jpg,png"
        ], [
            "name.required" => "Please Enter the name",
            "name.unique" => "The name is inserted before"
        ]);
        if ($validate->fails()) {

            return redirect()->back()->withErrors($validate)->withInput();
        }
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('web/images'), $imageName);
        $category =new Categories();
        $category->name = $request->name;
        $category->image = $imageName;
        $category->save();
        return redirect()->route('categories.create')->with('success', 'The Category has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
        return view("admin.categories.edit",compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $category)
    {
        $validate = Validator::make($request->all(), [
            "name" => "required|max:20|min:5|unique:categories,name,".$category->id,
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
        unlink(public_path('web/images/'.$category->image));
        $category->image = $imageName;

       }
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.show',$category->id)->with('success', 'The Category has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        unlink(public_path('web/images/'.$category->image));
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'The Category has been deleted');
    }
}
