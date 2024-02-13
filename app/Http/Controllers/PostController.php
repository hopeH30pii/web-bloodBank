<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showAppointment(){
        return view('appointment');
    }

    public function showAdmin(){
        return view('Admin');
    }
}
