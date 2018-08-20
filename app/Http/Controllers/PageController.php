<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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
 
            // Các tin trong trang about sẽ có category_id = 1
            $post1 = Post::where([
                                    ['slug', '=', 'cong-ty-co-phan-cong-nghe-an-toan-thong-tin-vnist'],
                                    ['category_id', '=', '1'],
                                ])->firstorFail();            
            
            $posts = Post::where([
                                    ['id', '<>', $post1->id],
                                    ['category_id', '=', '1'],
                                ])->get();
     	return view('theme::about',['post1'=>$post1,'posts'=>$posts]);
    }
    public function showAbout($slug)
    {

            // $post1 = Gioithieu::findBySlug($slug);
            // $posts = Gioithieu::findNotBySlug($slug);'slug',$slug
            // Các tin trong trang about sẽ có category_id = 1            
            $post1 = Post::where([
                ['slug', '=', $slug],
                ['category_id', '=', '1'],
            ])->firstorFail();            

            $posts = Post::where([
                ['id', '<>', $post1->id],
                ['category_id', '=', '1'],
            ])->get();                
        return view('theme::about',['post1'=>$post1,'posts'=>$posts]);
    }              
}
