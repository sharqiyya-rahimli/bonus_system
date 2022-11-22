<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table='branches';
    protected $fillable=['name','address','logo_path','network'];
    function network_object(){
        return $this->hasOne('App\Network','id','network');
    }
   
    
}
