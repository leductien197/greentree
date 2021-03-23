<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\News;
use App\User;

class SearchController extends Controller
{
    function index()
    {
        return view('/frontend/new/search');
    }

    function getSearch(Request $r)
    {
        // $data['search'] = News::FullTextSearch('symptom', $r->search)->paginate(6);
        // dd($r->search);
        //$data['search'] = News::where('title', 'like', '%' . $r->search . '%')->orWhere('symptom', 'like', '%' . $r->search . '%')->paginate(6);
        // dd($data['search']);
        // $data['search'] = News::search($r->search)->all();
        $data['search'] = News::search($r->search)->paginate(30);
        // dd($new,$data['search']);
        return view('frontend.new.search', $data);
    }
    public function autocomplete(Request $request)
    {
        $datas = News::select("name")
            ->Where("title", "like", "%{$request->terms}%")
            ->get();
        return response()->json($datas);
    }
}
