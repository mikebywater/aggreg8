<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ["title", "url", "content", "image", "hash", "source_id"];

    public function age()
    {

        $age = $this->created_at->diff(Carbon::now())->format('%d days , %h hours, %i minutes');
        return $age;
    }

    public function scopeRecent($query)
    {
        return $query->orderBy('created_at' , 'desc')->take(50)->get();
    }

    public function source()
    {
        return $this->belongsTo('App\Source');
    }

}