<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('F m, Y');
    }
}
