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
        return view('about-us');
    }

    public function contact(){
        return view('contact-us');
    }
    public function translate(){
        return view('translate');
    }
    

}
