<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Registers extends Model
{
    public function getLastToken(){

        $flights = DB::table('registers')
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();

        foreach ($flights as $flight) {
           echo $flight->token."-------";
        }
        
    }
}
