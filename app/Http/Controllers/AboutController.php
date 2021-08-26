<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class AboutController extends Controller
{
    public function All()
    {
        $info=About::get()->first();
        return view('front.about.index',compact('info'));
    }
    public function about()
    {
        $informations = About::All();
        return view('admin.about.index',compact('informations'));
    }
    public function AddAbout()
    {
        return view('admin.about.new');
    }
    public function AddInfo(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:105',
            'short_desc' => 'required|max:255',
            'description' => 'required|min:50',
            'image' => 'required',
            'sign_img' => 'required',

        ]);
        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'front/images/about/';
        $last_img = $up_location . $img_name;
        $image->move($up_location, $img_name);

        $image_sig = $request->file('sign_img');
        $names_gen = hexdec(uniqid());
        $img_ext = strtolower($image_sig->getClientOriginalExtension());
        $imgs_name = $names_gen . '.' . $img_ext;
        $up_location = 'front/images/about/';
        $last_img_sig = $up_location . $imgs_name;
        $image_sig->move($up_location, $imgs_name);

        About::insert([
            'title' => $request->title,
            'description' => $request->description,
            'short_desc' => $request->short_desc,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'birth' => $request->birth,
            'image' => $last_img,
            'sign_img' => $last_img_sig,
            'created_at' => Carbon::now()
        ]);


        return Redirect()->route('admin.about')->with('success', 'Informations has been added successfully');

    }

    public function EditeAbout($id)
    {
        $info = About::find($id);
        return view('admin.about.edite',compact('info'));
    }
    public function UpdateInfo(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:105',
            'short_desc' => 'required|max:255',
            'description' => 'required|min:50',

        ]);
        $old_image = $request->old_image;
        $old_sign = $request->old_sign;
        $image = $request->file('image');
        $sign = $request->file('sign_img');
        if ($image && $sign) {
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen . '.' . $img_ext;
        $up_location = 'front/images/about/';
        $last_img = $up_location . $img_name;
        $image->move($up_location, $img_name);

        $names_gen = hexdec(uniqid());
        $img_ext = strtolower($sign->getClientOriginalExtension());
        $imgs_name = $names_gen . '.' . $img_ext;
        $up_location = 'front/images/about/';
        $last_img_sig = $up_location . $imgs_name;
        $sign->move($up_location, $imgs_name);

            unlink($old_image);
            unlink($old_sign);
            About::find($id)->Update([
            'title' => $request->title,
            'description' => $request->description,
            'short_desc' => $request->short_desc,
            'phone' => $request->phone,
            'adress' => $request->adress,
            'birth' => $request->birth,
            'image' => $last_img,
            'sign_img' => $last_img_sig,
            'created_at' => Carbon::now()
            ]);
            }
            elseif($image){
                $name_gen = hexdec(uniqid());
                $img_ext = strtolower($image->getClientOriginalExtension());
                $img_name = $name_gen . '.' . $img_ext;
                $up_location = 'front/images/about/';
                $last_img = $up_location . $img_name;
                $image->move($up_location, $img_name);
                unlink($old_image);
                About::find($id)->Update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'short_desc' => $request->short_desc,
                    'phone' => $request->phone,
                    'adress' => $request->adress,
                    'birth' => $request->birth,
                    'image' => $last_img,
                    'created_at' => Carbon::now()
                    ]);
            }elseif($sign){
                $names_gen = hexdec(uniqid());
                $img_ext = strtolower($sign->getClientOriginalExtension());
                $imgs_name = $names_gen . '.' . $img_ext;
                $up_location = 'front/images/about/';
                $last_img_sig = $up_location . $imgs_name;
                $sign->move($up_location, $imgs_name);
                unlink($old_sign);
                About::find($id)->Update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'short_desc' => $request->short_desc,
                    'phone' => $request->phone,
                    'adress' => $request->adress,
                    'birth' => $request->birth,
                    'sign_img' => $last_img_sig,
                    'created_at' => Carbon::now()
                    ]);
            }
            else {
            About::find($id)->Update([
                'title' => $request->title,
                'description' => $request->description,
                'short_desc' => $request->short_desc,
                'phone' => $request->phone,
                'adress' => $request->adress,
                'birth' => $request->birth,
                'created_at' => Carbon::now()
            ]);
        }
            return Redirect()->route('admin.about')->with('success', 'Informations has been updated successfully');

    }
    public function DeleteInfo($id)
    {
        $images = About::find($id);
        $old_image = $images->image;
        $old_sign = $images->sign_img;
        unlink($old_image);
        unlink($old_sign);
        About::find($id)->delete();
        return Redirect()->back()->with('success', 'Informations has been deleted successfully');
    }

}
