<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content','status'];

    public function users(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function articles(){
        return $this->belongsTo('App\Article','article_id','id');
    }
}
