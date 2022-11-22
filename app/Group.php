<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table='group_list';
    protected $fillable=['name'];
}
