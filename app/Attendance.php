<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table='attendance';
    protected $fillable=['student_id','attendance_date'];

    function student(){
        return $this->hasOne('App\Student','id','student_id');
    }
}
