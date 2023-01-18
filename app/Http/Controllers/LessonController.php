<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = lesson::with('course')->get();
        return view('pages.back.lessons.index')->with('lessons', $lessons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = course::all();
    return view('pages.back.lessons.create')->with('courses', $course);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store
        $lesson = new lesson();
        $lesson->name = $request->name;
        $lesson->course_id = $request->course_id;
        $lesson->video = $request->video;
        $lesson->type = $request->type;
        $lesson->duration = $request->duration;
        $lesson->save();
        return redirect()->route('lessons.index');
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
        $lesson = lesson::find($id);
        $course = course::all();
        return view('pages.back.lessons.edit')->with('lesson', $lesson)->with('courses', $course);
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
        $lesson = lesson::find($id);
        $lesson->name = $request->name;
        $lesson->course_id = $request->course_id;
        $lesson->video = $request->video;
        $lesson->type = $request->type;
        $lesson->duration = $request->duration;
        $lesson->save();
        return redirect()->route('lessons.index');
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
        $lesson = lesson::find($id);
        $lesson->delete();
        return redirect()->route('lessons.index');
    }
}
