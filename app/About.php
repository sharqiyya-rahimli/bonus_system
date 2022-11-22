<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table='about';
    protected $fillable=['bg_image','content','title','img1','img2','img3','img4'];
}
