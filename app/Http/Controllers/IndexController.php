<?php

namespace App\Http\Controllers;

use App\Validators\PostValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller{
    protected $layout = 'default';
    public function index(){
        $layout = 'main';
        $widget = view('widgets.vertical-wrapper',  compact('layout'));
        return view('pages.welcome', compact('widget', 'layout'));
    }
    public function about(){
        // шаблон
        $layout=$this->layout;

        // виджеты
        $verticalWrapper = view('widgets.vertical-wrapper',  compact('layout'));
        $menuPush = view('widgets.menu-push', compact('layout'));
        $bannerTop = view('widgets.banner-top', compact('layout'));
        $breadcrumb = view('widgets.breadcrumb',  compact('layout'));

        // Вызов стриницы с шаблоном и виджетами
        return view ('pages.about',
            compact(
                'layout',
                'verticalWrapper', 
                'menuPush', 
                'bannerTop', 
                'breadcrumb'
            )
        );
    }
    public function contact(){
        $layout=$this->layout;
        $verticalWrapper = view('widgets.vertical-wrapper',  compact('layout'));
        $breadcrumb = view('widgets.breadcrumb',  compact('layout'));
        $menuPush = view('widgets.menu-push', compact('layout'));
        $bannerTop = view('widgets.banner-top', compact('layout'));
        $bannerHeadBottom = view('widgets.banner-header-bottom', compact('layout'));

        return view ('pages.contact', compact('verticalWrapper', 'menuPush', 'layout', 'bannerTop', 'breadcrumb', 'bannerHeadBottom'));
    }
    public function posts(){

        $layout=$this->layout;
        return view ('pages.posts', compact('layout'));
    }
    public function obr(Request $request){

        $validator = PostValidator::valid($request);

        if($validator->fails()){

            return Redirect::to('posts')->with('error', 'error!');
            
        }   
        return Redirect::to('posts')->with('success', 'ok!');
    }
}
