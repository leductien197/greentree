<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\News;

class SearchController extends Controller
{
    function index(){
        return view('/frontend/new/search');
    }

    function getSearch(Request $r){
        $data['search'] = News::where('title','like','%'.$r->search.'%')->orWhere('symptom','like','%'.$r->search.'%')->paginate(6);
        return view('frontend.new.search',$data);
    }
}
