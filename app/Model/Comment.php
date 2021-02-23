<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    // public function new(){
    //     return $this->belongsTo('App\Model\News','news_id','id');
    // }
    // protected $fillable = [
    //     'news_id',
    //     'name',
    //     'content',
    // ];
}
