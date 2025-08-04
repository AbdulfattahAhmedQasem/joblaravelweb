<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobController extends Controller
{
    function index(){
        // Return the view with static text
        return view('job.index');
    }
}
