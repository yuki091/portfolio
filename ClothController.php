<?php

namespace App\Http\Controllers;

use App\cloths;
use Illuminate\Http\Request;

class ClothController extends Controller
{
     
    public function home(Request $request) {
        $cloth_data = $request::all();
        return view('home',compact('cloth_data'));
    }
    
}
