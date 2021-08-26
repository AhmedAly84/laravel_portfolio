<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class CategoryController extends Controller
{
    //
    public function Category()
    {
        $categories =Category::all();
        return view('admin.category.index',compact('categories'));
    }
    public function AddCat(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:20',


        ]);
        Category::insert([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->back()->with('success', 'Category has been added successfully');

    }
    public function EditeCat($id)
    {
        $cat = Category::find($id);
        return view('admin.category.edite',compact('cat'));
    }
    public function UpdateCat($id,Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:20',


        ]);
        Category::find($id)->update([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('admin.cat')->with('success', 'Category has been updated successfully');

    }
    public function DeleteCat($id)
    {
        Category::find($id)->delete();
        return Redirect()->back()->with('success', 'Category has been deleted successfully');

    }
}
