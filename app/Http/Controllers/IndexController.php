<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller{
    protected $layout = 'default';
    public function index(){
        $layout = 'main';
        $widget = view('widgets.vertical-wrapper',  compact('layout'));
        return view('pages.welcome', compact('widget', 'layout'));
    }
    public function about(){
        $layout=$this->layout;
        $widget = view('widgets.vertical-wrapper',  compact('layout'));

        return view ('pages.about', compact('widget', 'layout'));
    }
    public function contact(){
        $layout=$this->layout;
        $widget = view('widgets.vertical-wrapper',  compact('layout'));

        return view ('pages.contact', compact('widget', 'layout'));
    }

}
