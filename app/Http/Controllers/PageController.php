<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gioithieu;

class PageController extends Controller
{
    //
    public function index(){
        // $keysucc = Post::where('category_id',1)->firstorFail();
        // $khoahoc = Post::where('category_id',2)->get();
        // $dichvu = Post::where('category_id',3)->get();
        
    	return view('theme::index');//,['keysucc'=>$keysucc,'khoahoc'=>$khoahoc,'dichvu'=>$dichvu]);
    }
    public function about() {
 
            $post1 = Gioithieu::where('featured',1)->firstorFail();
            $posts = Gioithieu::where('featured',0)->get();
 
     	return view('theme::about',['post1'=>$post1,'posts'=>$posts]);
    }
    public function showAbout($slug)
    {

        $post1 = Gioithieu::findBySlug($slug);
        $posts = Gioithieu::findNotBySlug($slug);        
        return view('theme::about',['post1'=>$post1,'posts'=>$posts]);
    }              
}
