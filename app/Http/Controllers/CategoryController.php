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
    public function destroy($category)
    {
        $category = Category::where('name', $category)->first();
        $category->delete();
        return response()->json(['success' => true]);
    }
}
