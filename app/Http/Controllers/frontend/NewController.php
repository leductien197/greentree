<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\News;

class NewController extends Controller
{
    function getDetail($id){
        $data['detail'] = News::find($id);
        return view('frontend.new.detailNew',$data);
    }

    function getAllNew()
    {
        $data['new'] = News::paginate(6);
        return view('frontend.new.new',$data);
    }
}
