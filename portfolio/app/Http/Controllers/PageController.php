<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home()
    {
        return view('dashboard.home.index');
    }
    public function resume()
    {
        return view('dashboard.resume.index');
    }
    public function service()
    {
        return view('dashboard.projects.index');
    }
    public function contact()
    {
        return view('dashboard.contact.index');
    }
    /*  public function login(){
        return view('dashboard.login.index');        
    }   */
}
