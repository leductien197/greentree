<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Traits\FullTextSearch;

class News extends Model
{
    use FullTextSearch;
    protected $table = "news";
    protected $searchable = [
        'title',
        'symptom'
    ];
    public function comments()
    {
        return $this->hasMany('App\Model\Comment', 'news_id', 'id');
    }
    public function trees()
    {
        return $this->belongsTo('App\Model\Tree', 'trees_id', 'id');
    }

    /**
     * The columns of the full text index
     */

    // protected $fillable =[
    //     'type',
    //     'code',
    //     'title',
    //     'symptom',
    //     'content',
    // ];
}
// qua model comments để định nghĩa mối quan hệ để cho phép comments có thể truy cập từ 1 news
// inverse của hasMany là belongsTo.

//Eloquent sẽ tự động xác định đúng cột foreign key trên Comment model. Theo quy ước, Eloquent sẽ có "snake case" tên của model và hậu tố _id. Vì vậy, trong ví dụ này, Eloquent sẽ hiểu foreign key trên Comment model chính là new_id
//Một khi relationship được xác định, chúng ta có thể truy cập lấy collection của comments bằng cách truy cập lấy comments property như sau:
// $comments = App\Model\News::find(1)->comments;
// query builder : $comments = App\Model\News::find(1)->comments()->where('title', 'foo')->first();
