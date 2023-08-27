<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Gender;
use App\Models\Post;
use App\Validators\PostValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller{
    protected $layout = 'default';
    public function index(){

        $data = DB::select('select * from posts');

        $layout = 'main';
        $widget = view('widgets.vertical-wrapper',  compact('layout'));

        return view('pages.welcome', compact('widget', 'layout', 'data'));
    }
    public function about(Request $request){
        // шаблон

        $layout=$this->layout;

        // $posts = Post::where('id', $request->id)->get();
              // Post::get();  // множество объектов
              // Post::first(); // одиночный объект
              // Post::where('id',19)->first(); // одиночный объект с id - 19
              // Post::where('id',19)->get();  // множество из одного объекта с id - 19
        // $id = $request->id;
        // if(isset($request->text)){
        //     $model = new Post;
        //     $model->text = $request->text;
        //     $model->save();
        //     $posts = Post::get();
        //     $data = [];    
        // }
            
        $genders = Gender::get();
            

        $posts = Post::get();
            dd($posts[1]->categories[0]-> categories);
        $data = [];

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
                'breadcrumb',
                'posts',
                // 'id'
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

    public function categories(){
        $layout=$this->layout;
        
        $verticalWrapper = view('widgets.vertical-wrapper',  compact('layout'));
        $breadcrumb = view('widgets.breadcrumb',  compact('layout'));
        $menuPush = view('widgets.menu-push', compact('layout'));
        $bannerTop = view('widgets.banner-top', compact('layout'));
        $bannerHeadBottom = view('widgets.banner-header-bottom', compact('layout'));

        return view ('pages.categories', compact('verticalWrapper', 'menuPush', 'layout', 'bannerTop', 'breadcrumb', 'bannerHeadBottom'));
    }

    public function category(){
        $layout=$this->layout;

        $verticalWrapper = view('widgets.vertical-wrapper',  compact('layout'));
        $breadcrumb = view('widgets.breadcrumb',  compact('layout'));
        $menuPush = view('widgets.menu-push', compact('layout'));
        $bannerTop = view('widgets.banner-top', compact('layout'));
        $bannerHeadBottom = view('widgets.banner-header-bottom', compact('layout'));

        return view ('pages.category', compact('verticalWrapper', 'menuPush', 'layout', 'bannerTop', 'breadcrumb', 'bannerHeadBottom'));
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
        DB::insert('insert into posts (text) value (?)', [$request->text]);   
        return Redirect::to('posts')->with('success', 'ok!');
    }
    public function obr_db(Request $request){

        $validator = PostValidator::obrab($request);
 
        
        if($validator->fails()){

            return Redirect::to('db1')->with('error', 'error!');
            
        }
        DB::insert('insert into posts (text) value (?)', [$request->name]);   
        return Redirect::to('db1')->with('success', 'ok!');
    }




    public function db1($id= null, $name= null){
        // $mass = ['id'=> $id, 'name'=>$name];
        // dd($mass);
        $layout="full";
        return view ('pages.db1', compact('layout'));
    }
    public function db2(Request $request){
    
        dd($request);
    }
    public function about2(Request $request){

        dd($request);

        $layout="full";
        // $id = ;
        return view ('pages.db1', compact('layout'));
        
    }





    public function postsobr(Request $request){
        DB::insert('insert into posts (text) value (?)',[$request->id]);
        return Redirect::to('/');
    }
    public function updatepost(Request $request){

        DB::update('update posts set text = ? where id = ?',[$request->text, $request->id]);
        return Redirect::to("/");

    }
    public function deletepost($id){
        DB::delete('delete from posts where id = ?',[$id]);
        return Redirect::to("/");
    }
}
