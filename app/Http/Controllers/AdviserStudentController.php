<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviserStudentController extends Controller
{
    
    public function index()
    {
        return view('adviser.adviserstudents');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }



}
