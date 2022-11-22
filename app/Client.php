<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table='clients';
    protected $fillable=['name','surname','contact','email','birthdate'];


    /*function group(){
        return $this->hasOne('App\Group','id','group_id');
    }*/
}
