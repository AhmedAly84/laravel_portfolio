<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class ContactController extends Controller
{
    public function Show()
    {
        $about = About::get()->first();
        return view('front.contact.index',compact('about'));
    }
    public function New(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required |email ',
            'message' => 'required',


        ]);
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->back()->with('success', 'Thank you for your message');

    }
    //Admin section
    public function All()
    {
        $messages = Contact::all();
        return view('admin.contact.index',compact('messages'));
    }
    public function DeleteMessage($id)
    {
        Contact::find($id)->delete();
        return Redirect()->back()->with('success', 'Message has been deleted successfully');

    }
}
