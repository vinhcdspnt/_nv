<?php

namespace App;

use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Resizable; //dùng để gọi các kích thước ảnh khác nhau
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
        
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }  
    public static  function findBySlug($slug)
    {
        return static::where('slug',$slug)->firstorFail();
    }     
}
