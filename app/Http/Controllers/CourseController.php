<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\Course;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courseTeacher(){

        $c = Course::where('id',1)->first();
        //belongsto
        // return $c->teacher;
        //Eloquent
        return $c->assignedTeacher();
        
    }
}
