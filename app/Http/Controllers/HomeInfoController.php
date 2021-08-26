<?php

namespace App\Http\Controllers;

use App\Models\HomeInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeInfoController extends Controller
{
    public function AddInfo(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:105',
            'description' => 'required|max:255',
            'image' => 'required'
        ]);
        $home_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($home_image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'front/images/home/';
        $last_img = $up_location . $img_name;
        $home_image->move($up_location, $img_name);

        HomeInfo::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);


        return Redirect()->back()->with('success', 'Informations has been added successfully');
    }
   public function EditeInfo($id)
   {
        $info = HomeInfo::find($id);
        return view('admin.home_edite',compact('info'));
   }
   public function UpdateInfo($id, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:105',
            'description' => 'required|max:255',

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
            HomeInfo::find($id)->Update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
        } else {
            HomeInfo::find($id)->Update([
                'title' => $request->title,
                'description' => $request->description,
                'created_at' => Carbon::now()
            ]);
        }



        return Redirect()->back()->with('success', 'Informations has been updated successfully');
    }
    public function DeleteInfo($id)
    {
        $image = HomeInfo::find($id);
        $old_image = $image->image;
        unlink($old_image);
        HomeInfo::find($id)->delete();
        return Redirect()->back()->with('success', 'Informations has been deleted successfully');
    }
}
