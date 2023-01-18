<?php

namespace App\Http\Controllers;

use App\Models\mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // same with category but with mentor
        $mentor = mentor::all();
        return view('pages.back.mentor.index')->with('mentors', $mentor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // same with category but with mentor
        return view('pages.back.mentor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // same with category but with mentor

        $mentor = new mentor();
        $mentor->name = $request->name;
        $mentor->email = $request->email;
        $mentor->profession = $request->profession;

        //store image
        $image = $request->file('profile');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        $mentor->profile = $image_name;
        $mentor->save();

        return redirect()->route('mentor.index');
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
    public function edit(mentor $mentor)
    {
        $mentor = mentor::find($mentor->id);
        return view('pages.back.mentor.edit')->with('mentor', $mentor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mentor $mentor)
    {
        // update logic
        $mentor = mentor::find($mentor->id);
        $mentor->name =
            $request->name;
        $mentor->name = $request->name;
        $mentor->email = $request->email;
        $mentor->profession = $request->profession;

        //store image
        if ($request->profile) {
            $image = $request->file('profile');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
            $mentor->profile = $image_name;
        }

        $mentor->save();
        return redirect()->route('mentor.index')->with('success', 'Item updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(mentor $mentor)
    {

        // delete
        $mentor->delete();
        return redirect()->route('mentor.index')->with('success', 'Item deleted successfully!');
    }
}
