<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function teacherDash(){
        return view('pages.teachers.teacherDash');

    }
    //
    public function contact(){
        return view('pages.contact');
    }
    public function myProfile(){
        $name = "Mr. X";
        $id = "12-234-1";
        $dob = "12323232";
        $names = array("Mr. X","Mr. Y","Mr. Z","Mr. A");
        return view('pages.myprofile')
        ->with('name',$name)
        ->with('id',$id)
        ->with('dob',$dob)
        ->with('names',$names);
    }
}