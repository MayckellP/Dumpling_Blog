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
<<<<<<< HEAD
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
<<<<<<< HEAD
    public function yourEvent(){
        return view('yourEvent');
    }
    
=======
        return view('about-us');
=======
        return view('about');
>>>>>>> cc19cb8 (Commit 2)
    }

    public function contact(){
        return view('contact');
    }
<<<<<<< HEAD
>>>>>>> f64d6a9 (commit-05-April-23)
=======
    public function translate(){
        return view('translate');
    }
=======
>>>>>>> 53dd12b (commit translate component)
    public function yourEvent(){
        return view('yourEvent');
    }
    
>>>>>>> 2339bf0 (commit 11:13 hours)

}
