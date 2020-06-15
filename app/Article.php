<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Article extends Model
{
    protected $guarded = [];

    public function path()
    {
        return route('article.show', $this);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}