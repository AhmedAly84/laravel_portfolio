<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PortfolioController extends Controller
{
    public function Portfolio()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index',compact('portfolios'));
    }
   public function Add()
   {
    $category = Category::all();
    return view('admin.portfolio.add',compact('category'));
   }
   public function Store(Request $request)
   {
    $validated = $request->validate([
        'title' => 'required|max:105',
        'description' => 'min:15',

    ]);
    $home_image = $request->file('image');
    $name_gen = hexdec(uniqid());
    $img_ext = strtolower($home_image->getClientOriginalExtension());
    $img_name = $name_gen . '.' . $img_ext;
    $up_location = 'front/images/home/';
    $last_img = $up_location . $img_name;
    $home_image->move($up_location, $img_name);

    Portfolio::insert([
        'title' => $request->title,
        'description' => $request->description,
        'clinet' => $request->clinet,
        'date' => $request->date,
        'category_id' => $request->category_id,
        'image' => $last_img,
        'created_at' => Carbon::now()
    ]);


    return Redirect()->route('admin.port')->with('success', 'Project has been added successfully');
   }
   public function Edite($id)
   {
       $port =Portfolio::find($id);
       $category = Category::all();
       return view('admin.portfolio.edite',compact('port','category'));
   }
   public function Update(Request $request,$id)
{
    $validated = $request->validate([
        'title' => 'required|max:105',
        'description' => 'min:15',

    ]);
    $old_image = $request->old_image;
    $image = $request->file('image');
    if ($image) {
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'front/images/home/';
        $last_img = $up_location . $img_name;
        $image->move($up_location, $img_name);

        unlink($old_image);
        Portfolio::find($id)->Update([
            'title' => $request->title,
            'description' => $request->description,
            'clinet' => $request->clinet,
            'date' => $request->date,
            'category_id' => $request->category_id,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);
    } else {
        Portfolio::find($id)->Update([
            'title' => $request->title,
            'description' => $request->description,
            'clinet' => $request->clinet,
            'date' => $request->date,
            'category_id' => $request->category_id,
            'created_at' => Carbon::now()
        ]);
    }



    return Redirect()->route('admin.port')->with('success', 'Project has been updated successfully');
}
   public function Delete($id)
   {
       Portfolio::find($id)->delete();
       return Redirect()->back()->with('success', 'Project has been Deleted successfully');

   }
   //show front page
   public function All()
   {
       $categories = Category::all();
       $portfolio = Portfolio::all();
       return view('front.portfolio.index',compact('categories','portfolio'));
   }
   //show details page
   public function Drtails($id)
   {
        $details = Portfolio::find($id);
        return view('front.portfolio.details',compact('details'));
   }
}
