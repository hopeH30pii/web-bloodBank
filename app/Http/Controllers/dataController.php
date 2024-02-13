<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dataController extends Controller
{
    public function index()
    {
        $apps=DB::select('select * from myappointment');
        return view('showappointments',['apps' => $apps]);
    }
    // public function showapp($appId)
    // {
    //    $appointment= DB::select('select * from mycontact where id=?',[$appId])[0];
    //    return dd($appointment);

    // }
    public function indexcont()
    {
        $cons=DB::select('select * from mycontact');
        return view('showcontact',['cons' => $cons]);
    }
}
