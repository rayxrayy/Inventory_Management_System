<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = category::all();
        // dd($categories);
        return view('category',compact('categories'));
    }
    public function store(Request $request){
        $category = new category();
        // dd($category);
        $category->name = $request->input('name');
        $category->status = $request->input('status');
        $category->save();

        return redirect('/category');
        // dd($request);
    }
    // Show the form for editing a category
    public function edit($category)
    {
        $category = Category::where('name', $category)->first();
        return view('category', compact('category'));
    }

    // Delete a category
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category')->with(['message'   => 'Category deleted successfully']);
    }

    public function update(Request $request)
    {
        if(!$request->has('id')){
            return redirect('/category')->with(['message' => 'Oops.. Something went wrong']);
        }

        $category = category::find($request->input('id'));
        $category->name = $request->input('name') ?? $category->name;
        $category->status = $request->input('status') ?? $category->status;
        $category->save();

        return redirect('/category')->with(['message' => 'Category updated successfully']);
    }


}
