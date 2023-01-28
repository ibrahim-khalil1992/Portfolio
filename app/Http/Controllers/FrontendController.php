<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;
// use App\Main;

class FrontendController extends Controller
{
    public function index(){
        $mains = Main::first();
        return view('frontend.index', compact('mains'));
    }

    public function deshboard(){
        return view('frontend.deshboard');
    }
    
    // public function services(){
    //     return view('frontend.services');
    // }
    public function portfolio(){
        return view('frontend.portfolio');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
