<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [

        'title',
        'body',
        'published_at'

    ];

    //в базе не записывалось паблишед эт, поэтому делаем все это ниже

    public function setPublishedAtAttribute($date)
    {

        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }

    /**
     *
     */
    public function user()
    {

       return $this->belongsTo('App\User');

    }
}

