<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dasboardController extends Controller
{
    public function index()
    {

        return view('pages.back.overview');
    }
}
