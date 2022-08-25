<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviserHomeController extends Controller
{
    public function index()
    {
        return view('adviser.adviserhome');

    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
