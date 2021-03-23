<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller\backend\NewsController;
use App\Model\News;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    //
    function getIndex()
    {
        $data['new'] = count(News::all());
        $data['lua'] = count(News::all()->where('trees_id', 'like', '1'));
        $data['ngo'] = count(News::all()->where('trees_id', 'like', '2'));
        return view('backend.index', $data);
    }

    function Logout()
    {
        Auth::logout();
        return redirect('admin');
    }
}
