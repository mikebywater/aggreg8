<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $fillable = ["url_node", "url", "content_node", "image_node", "title_node", "filter" ,  "name"];
}
