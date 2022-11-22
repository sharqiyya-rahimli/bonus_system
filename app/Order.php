<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';
    protected $fillable=['client_id','order_date','user','total_amount'];
    function client(){
        return $this->hasOne('App\Client','id','client_id');
    }
   
    
}
