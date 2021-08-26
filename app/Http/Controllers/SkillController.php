<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use App\Models\Language;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SkillController extends Controller

{

    public function Skills()
    {
        $skills = Skill::all();
        $langs = Language::all();
        $knows = Knowledge::all();
        return view('admin.skills.index',compact('skills','langs','knows'));
    }
    public function AddSkills(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'presantage' => 'required|max:3',

        ]);
        Skill::insert([
            'name' => $request->name,
            'presantage' => $request->presantage,

            'created_at' => Carbon::now()
        ]);
        return Redirect()->back()->with('success', 'Skill has been added successfully');

    }
    public function AddLang(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'presantage' => 'required|max:3',

        ]);
        Language::insert([
            'name' => $request->name,
            'presantage' => $request->presantage,

            'created_at' => Carbon::now()
        ]);
        return Redirect()->back()->with('success', 'Language skill has been added successfully');

    }
    public function AddKnow(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',


        ]);
        Knowledge::insert([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);
        return Redirect()->back()->with('success', 'Knowledge skill has been added successfully');

    }
    public function Editekills($id)
    {
        $skill = Skill::find($id);
        return view('admin.skills.edite_skill',compact('skill'));
    }
    public function UpdateSkills(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'presantage' => 'required|max:3',

        ]);
        Skill::find($id)->update([
            'name' => $request->name,
            'presantage' => $request->presantage,

            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('admin.skills')->with('success', ' skill has been updated successfully');
    }
    public function DeleteSkill($id)
    {
        Skill::find($id)->delete();
        return Redirect()->back()->with('success', ' skill has been deleted successfully');

    }
    public function DeleteLang($id)
    {
        Language::find($id)->delete();
        return Redirect()->back()->with('success', ' skill has been deleted successfully');

    }
    public function DeleteKnow($id)
    {
        Knowledge::find($id)->delete();
        return Redirect()->back()->with('success', ' skill has been deleted successfully');

    }
    public function UpdateLang(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'presantage' => 'required|max:3',

        ]);
        Language::find($id)->update([
            'name' => $request->name,
            'presantage' => $request->presantage,

            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('admin.skills')->with('success', ' skill has been updated successfully');
    }
    public function UpdateKnow(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',


        ]);
        Knowledge::find($id)->update([
            'name' => $request->name,


            'created_at' => Carbon::now()
        ]);
        return Redirect()->route('admin.skills')->with('success', ' skill has been updated successfully');
    }
    public function EditeLang($id)
    {
        $skill = Language::find($id);
        return view('admin.skills.edite_lang',compact('skill'));
    }
    public function EditeKnow($id)
    {
        $skill = Knowledge::find($id);
        return view('admin.skills.edite_know',compact('skill'));
    }
       //show skills in front
       public function All()
       {
          $skills =Skill::all();
          $langs =Language::all();
          $knows =Knowledge::all();
          return view('front.skills.index',compact('skills','langs','knows'));
       }

}
