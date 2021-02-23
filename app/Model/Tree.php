<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $table = "trees";

    public function new()
    {
        return $this->hasMany('App\Model\News','trees_id','id');
    }
    // protected $fillable = [
    //     'code',
    //     'name'
    // ];
}

//Một khi relationship được xác nghĩa, chúng ta có thể lấy New model cho một Comment bằng cách truy cập new "dynamic property"
//      $comment = App\Comment::find(1);
//      echo $comment->post->title;
