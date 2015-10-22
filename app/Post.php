<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model {
	
   	protected $table = 'post';
    protected $appends = ['cat_name','cat_slug','post_option','author','short_desc'];
    protected $hidden = ['option','created_at','updated_at',"id_ref","id_reg","id_web","id_user",];
    
    public function cat()
    {
        return $this->belongsTo('App\PostCat','category');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Post','id_ref');
    }

     public function post_author()
    {
        return $this->belongsTo('App\User','id_user');
    }
    
    public function getCatNameAttribute()
    {
        return $this->cat()->first()->title;
    }
    
    
    public function getCatSlugAttribute()
    {
        return $this->cat()->first()->slug;
    }
    
    
    public function getAuthorAttribute()
    {
        return $this->post_author()->first();
    }
    
     
    public function getPostOptionAttribute()
    {
        $option = json_decode($this->option);
        return $option;
    }
    
    
    public function getShortDescAttribute(){
        $words = explode(" ",$this->description);
        return implode(" ",array_splice($words,0,20));
    }

}