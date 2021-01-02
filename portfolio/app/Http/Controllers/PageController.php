<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(){
        return view('dashboard.home-p');  
    }
    public function resume(){
        return view('dashboard.resume');        
    }
    public function service(){
        return view('dashboard.service');        
    }
    public function contact(){
        return view('dashboard.contact');        
    }    
    public function login(){
        return view('dashboard.login');        
    }        
}
