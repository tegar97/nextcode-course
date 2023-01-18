<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\lesson;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

        $courses = course::with('lessons')->get();
        return view('pages.front.home')->with('courses',$courses);
    }

    public function detailCourse($slug){
        $course = course::with('lessons')->where('slug',$slug)->first();
        return view('pages.front.detailCourse')->with('course', $course);
    }
    public function watchCourse($slug,$id)
    {
        $course = course::with('lessons')->where('slug', $slug)->first();
        $lesson = lesson::where('id', $id)->first();

        return view('pages.front.watchVideo')->with('course', $course)->with('lesson', $lesson);
    }
}
