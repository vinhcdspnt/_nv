<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PageController extends Controller
{
    //
    public function index(){
        $noibat = Post::where([
                                ['featured', '=', '1'],
                            ])->orderBy('created_at', 'desc')
                              ->limit(3)
                              ->get();
        
        //dd($noibat->count());
        $arrID = array();
        foreach ($noibat as $nb) {
            # code...
            $arrID[] = $nb->id;
        }        
        while ($noibat->count()<3) {
            //Tin noi bat không đủ sẽ lấy 3 tin mới nhất

                $them = Post::whereNotIn('id', $arrID)
                            ->orderBy('created_at', 'desc')
                            ->first();
                $noibat[] = $them;
                $arrID[] = $them->id;                            
                        
        }


        //dd($arrID);
        $congnghe = Post::where('category_id', '=', '3')
                        ->whereNotIn('id', $arrID)
                        ->orderBy('created_at', 'desc')
                        ->limit(4)
                        ->get();
        //dd($congnghe);          
        $dichvu = Post::where('category_id', '=', '3') // tin về dich vu an toan thong tin
                        ->whereNotIn('id', $arrID)
                        ->orderBy('created_at', 'desc')
                        ->limit(3)
                        ->get();        
    	return view('theme::index',['noibat' => $noibat,'congnghe' => $congnghe,'dichvu' => $dichvu]);
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
                                ])->orderBy('created_at', 'desc')
                                  ->get();
     	return view('theme::about',['post1'=>$post1,'posts'=>$posts]);
    }
    public function showAbout($slug)
     {

          
    //         $post1 = Post::where([
    //             ['slug', '=', $slug],
    //             ['category_id', '=', '1'],
    //         ])->firstorFail();            

    //         $posts = Post::where([
    //             ['id', '<>', $post1->id],
    //             ['category_id', '=', '1'],
    //         ])->get();                
    //     return view('theme::about',['post1'=>$post1,'posts'=>$posts]);
    } 
    public function singlePost($slug_cate, $slug_post=null)  {
        if(!isset($slug_post)) 
        {

            $cate_id = Category::where('slug', '=', $slug_cate)->firstorFail();
            $post1 = Post::where([
                                    ['category_id', '=', $cate_id->id],
                                ])->orderBy('created_at', 'desc')
                                  ->firstorFail();
            $posts = Post::where([  ['id', '<>', $post1->id],
                                    ['category_id', '=', $cate_id->id],
                                ])->orderBy('created_at', 'desc')->get();
                                    
            //dd($post);
        }
        else
        {
            $cate_id = Category::where('slug', '=', $slug_cate)->firstorFail();
            $post1 = Post::where([ ['slug', '=', $slug_post],
                                    ['category_id', '=', $cate_id->id],
                                ])->orderBy('created_at', 'desc')
                                  ->firstorFail();
            $posts = Post::where([  ['id', '<>', $post1->id],
                                    ['category_id', '=', $cate_id->id],
                                ])->orderBy('created_at', 'desc')->get();           
            dd($post1);
        }
        return view('theme::single-post',['post1'=>$post1,'posts'=>$posts]);
    }               
}
