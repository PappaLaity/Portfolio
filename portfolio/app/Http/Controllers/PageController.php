<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(){
        return view('home-p');  
    }
    public function resume(){
        return view('resume');        
    }
    public function service(){
        return view('service');        
    }
    public function contact(){
        return view('contact');        
    }    
    public function login(){
        return view('login');        
    }        
}
