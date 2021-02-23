<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\News;

class IndexController extends Controller
{
    function getIndex(){
        $data['new'] = News::all()->take(6);
        // $data['new'] = News::all();
        $data['hotNew'] = News::where('img', '<>', 'no-img.jpg')->where('hot', 1)->orderby('id', 'desc')->take(6)->get();
        return view('frontend.index',$data);
    }


    function getContact(){
       return view('frontend.contact');
    }


    function getAbout(){
        return view('frontend.about');
     }



}
