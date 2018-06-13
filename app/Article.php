<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','summary','content','view_count','share_count',
    'slug','type','publish_at','status','user_id'];

    public function tags(){
        return $this->belongsToMany('App\Tag','article_tag','article_id','tag_id');
    }

    public function categories(){
        return $this->belongsToMany('App\Category','article_category','article_id','category_id');
    }

    public function comments(){
        return $this->hasMany('App\Category','category_id');
    }

    public function users(){
        return $this->belongsTo('App\User','user_id');
    }
}
