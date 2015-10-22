<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthContract;

class User extends Model implements AuthContract {
	use Authenticatable;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'username',
        'password'
    ];
    

     /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token','access_token','access_token_secret','uid','profile','pin','email','id_reg','id_ref','status','level','twitter_id','created_at','updated_at','option'];
    protected $appends = ['user_profile','user_option'];
    
    
     public function getUserProfileAttribute()
    {
        $Profile = json_decode($this->profile);
        return $Profile;
    }
    
    
     public function getUserOptionAttribute()
    {
        $option = json_decode($this->option);
        return $option;
    }
}