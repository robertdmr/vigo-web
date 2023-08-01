<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $drivers = Driver::with(['vehicles','images'])->get();
        return view('admin.panel', compact('drivers'));

    }

    public function driver($id){

        $driver = Driver::where('id', $id)->with(['vehicles','images'])->first();
        return view('admin.driver', compact('driver'));

    }
}
