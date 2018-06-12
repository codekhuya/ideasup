<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title','slug','priority_id'];

    public function articles(){
        return $this->belongsToMany('App\Article','article_tag','tag_id','article_id');
    }

    public function validator(array $input){

    }
}
