<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //
    function checkDB( ){
        echo" code will be here Error Connecting database";
     /*   $user = DB::select('select * from Client');
        return $user;*/
    }
}
