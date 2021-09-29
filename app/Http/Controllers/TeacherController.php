<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //
    public function create(){
        return view('pages.teachers.create');
    }
    public function createSubmit(Request $request){
        $var = new Teacher();
        $var->name = $request->name;
        $var->phone = $request->phone;
        $var->save();
        return "Added";

    }
    public function list(){

        $teachers = Teacher::all();
        return view('pages.teachers.list')->with('teachers',$teachers);
    }
}