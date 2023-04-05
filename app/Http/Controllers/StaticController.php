<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    // public function index){
    //     return view('index');
    // }
    
    public function home(){
        return view('home');
    }
    public function about(){
<<<<<<< HEAD
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    public function yourEvent(){
        return view('yourEvent');
    }
    
=======
        return view('about-us');
    }

    public function contact(){
        return view('contact-us');
    }
>>>>>>> f64d6a9 (commit-05-April-23)

}
