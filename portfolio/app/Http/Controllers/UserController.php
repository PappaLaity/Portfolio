<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*require '../../../resources/views/entite/domain.php';*/

class wid{

    public $name = "";
    public $desc = "";
    public $i = "";
    
    public function __construct($nom,$descrip){
        $this->name = $nom;
        $this->desc = $descrip;
    }
}

class UserController extends Controller
{
    
    function index(){
        //echo "Portfolio link";
        $title = 'Papa Laity';
        $web = new wid('Web','desc');
        $mobil = new wid('Mobile','desc');
        $dataScience = new wid('Data Science','desc');
        $iot = new wid('Internet des Objets','desc');
        $dta = ['Name'=>'name','Desc'=>''];
        $wids = [$web,$mobil,$dataScience,$iot];

        $techs = [
            ['Name'=>'','link'=>''],
            ['Name'=>'','link'=>''],
            ['Name'=>'','link'=>''],
            ['Name'=>'','link'=>'']
        ];
        
        $tools = [
            ['Name'=>'','link'=>''],
            ['Name'=>'','link'=>''],
            ['Name'=>'','link'=>''],
            ['Name'=>'','link'=>'']
        ];
        

        return view('home', ['title' => $title, 'wid'=>$wids, 'tech'=>$techs , 'dta'=>$dta]);
    }
    function profil(){
        //echo "Portfolio link";
        $title = 'Resume';
        return view('userPages.profil', ['title' => $title]);
    }

    function join(){
        $title = 'Contact';
        return view('userPages.join' , ['title' => $title]);
    }

    function login(){
        $title = 'Login';
        return view('userPages.login' , ['title' => $title]);
    }
    function services(){
        $title = 'Services';
        return view('userPages.services' , ['title' => $title]);
    }
}
