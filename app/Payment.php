<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table='payment_list';
    protected $fillable=['student_id','amount','lesson_count','note','payment_date'];

    function student(){
        return $this->hasOne('App\Student','id','student_id');
    }
}
