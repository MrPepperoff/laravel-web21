<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller{
    protected $layout = 'default';
    public function index(){
        $layout = 'main';
        return view('pages.welcome');
    }
    public function about(){
        $layout=$this->layout;
        $x = 10;
        $flag=true;
        $mass=['apple','orange'];
        $layout='default';
        // return view('about', ['x' => $x]);

        return view ('pages.about', compact('x', 'flag', 'mass','layout'));
    }

}
