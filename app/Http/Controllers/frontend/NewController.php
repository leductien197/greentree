<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\News;

class NewController extends Controller
{
    function getDetail($id)
    {
        $data['detail'] = News::find($id);
        return view('frontend.new.detailNew', $data);
    }

    function getAllNew()
    {
        // $data['new'] = News::paginate(6);
        $data['new'] = News::all()->take(6);
        //$data['rice'] = News::all()->where('trees_id', 'like', '1');
        return view('frontend.new.new', $data);
    }

    function getNewAll()
    {
        $data['new'] = News::all();
        return view('frontend.new.new', $data);
    }
    // function getAllRice()
    // {
    //     $data['rice'] = News::take(6)->where('trees_id', 'like', '1');
    //     return view('frontend.new.new', $data);
    // }
}
