<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title','summary','content','view_count',
        'share_count','slug','type','status','publish_at'
    ];

    public function comments(){
       return $this->hasMany('App\Comment','article_id','id'); 
    }
}
