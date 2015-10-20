<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    protected $fillable = ['route' , 'user_id'];

    public function scopeToday($query)
    {
        $start = (new Carbon('now'))->hour(0)->minute(0)->second(0);
        $end = (new Carbon('now'))->hour(23)->minute(59)->second(59);

        return $query->whereBetween('created_at', [$start , $end])->get();
    }
}
