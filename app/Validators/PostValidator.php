<?php

    namespace App\Validators;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostValidator{

    public static function valid($request){

        return Validator::make($request->all(),[
            'text' => 'required|numeric',
        ]);
    }
    public static function obrab($request){

        return Validator::make($request->all(),[
            'name' => 'required|numeric',
        ]);
    }
    
}