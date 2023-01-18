<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = course::all();
        return view('pages.back.course.index')->with('courses', $course);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentors = mentor::all();
        return view('pages.back.course.create')->with('mentors',$mentors);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $course = new course();
        $course->name = STR::title($request->name);
        $course->slug = $request->slug;
        //store image
        $image = $request->file('thumbnail');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        $course->thumbnail = $image_name;

        $course->price =  (int)str_replace(',', '', $request->price);
        $course->description =  $request->description;
        $course->status =  $request->published;
        $course->level = $request->level;
        $course->status = 'published';
        $course->mentor_id = $request->mentors_id;

        $course->save();

        return redirect()->route('course.index')->with('success', 'Item created successfully!');;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // edit
        $course = course::find($id);
        $mentors = mentor::all();
        return view('pages.back.course.edit')->with('course', $course)->with('mentors',$mentors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update
        $course = course::find($id);
        $course->name = STR::title($request->name);
        $course->slug = $request->slug;
        //store image
        // if not edit image
        if($request->file('thumbnail') == null){
            $course->thumbnail = $course->thumbnail;
        }else{
            $image = $request->file('thumbnail');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $course->thumbnail = $image_name;
        }



        $course->price =  (int)str_replace(',', '', $request->price);
        $course->description =  $request->description;
        $course->status =  $request->published;
        $course->level = $request->level;
        $course->status = 'published';
        $course->mentor_id = $request->mentors_id;

        $course->save();

        return redirect()->route('course.index')->with('success', 'Item updated successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $course = course::find($id);
        $course->delete();
        return redirect()->route('course.index')->with('success', 'Item deleted successfully!');
    }
}
