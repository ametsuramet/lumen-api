<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCat extends Model
{
    //
    protected $table = 'post_category';
    
     public function post()
    {
        return $this->hasMany('App\Post','category');
    }
}
