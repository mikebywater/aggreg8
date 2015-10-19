<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    protected $fillable = ['route' , 'user_id'];
}
