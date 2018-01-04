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

        $sha_file = hash_file('sha256',$_FILES['file-send']['tmp_name']);
        
        
        $register = new Registers;

        echo $register->getLastToken();

        return "ok";

        $register->token = '0';
        $register->hash = $sha_file;

        $register->save();


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