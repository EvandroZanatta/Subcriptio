<?php

namespace App\Http\Controllers;

use App\Registers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filename;

class RegisterController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @return Response
     */

    public function insert(Request $request)
    {

        //$file = $request->all();

        return $_FILES;
    }   

    /*
    public function insert(Request $request)
    {

        $register = new Registers;

        $register->hash = 123;

        $register->save();

        
        return $input = $request->all();
        //return $_GET['ok'];
    }   
    */
}