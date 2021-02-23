<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddNewRequest;
use App\Http\Requests\EditNewRequest;
use App\Model\News;
use App\Model\Tree;
use Illuminate\Support\Str;


class NewsController extends Controller
{
    public function getNews()
    {
        $data['new'] = News::paginate(6);
        return view('backend.News.listNews', $data);
    }
    // public function editNews()
    // {
    //     $data['tree'] = Tree::all();
    //     return view('backend.News.editNews',$data);
    // }
    public function editNews()
    {
        $data['tree'] = Tree::all();
        return view('backend.News.editNews', $data);
    }
    public function addNews()
    {
        $data['tree'] = Tree::all();
        return view('backend.News.addNews', $data);
    }

    function postAddNew(AddNewRequest $r)
    {

        $new = new News();
        $new->title = $r->name;
        $new->trees_id = $r->tree;
        $new->symptom = $r->symptom;
        $new->content = $r->content;
        $new->hot = $r->hot;
        if ($r->hasFile('new_img')) {
            $file = $r->new_img;
            $filename = Str::random(9) . '.' . $file->getClientOriginalExtension();
            $file->move('backend/img', $filename);
            $new->img = $filename;
        } else {
            $new->img = 'noImage.jpg';
        }

        $new->save();
        return redirect('/admin/news')->with('thongbao', 'Đã thêm thành công!');
    }

    public function getEditNew(request $r, $id)
    {
        $data['tree'] = Tree::all();
        $data['new'] = News::find($id);
        return view('backend.News.editNews', $data);
    }

    function postEditNew($id, EditNewRequest $r)
    // function postEditNew(EditNewRequest $r, $id)
    {
        $new = News::find($id);
        $new->title = $r->title;
        $new->trees_id = $r->tree;
        $new->symptom = $r->symptom;
        $new->content = $r->content;
        $new->hot = $r->hot;
        if ($r->hasFile('new_img')) {
            if ($new->img != 'no-img.jpg') {
                unlink('backend/img/' . $new->img);
            }

            $file = $r->new_img;
            $filename = str::random(9) . '.' . $file->getClientOriginalExtension();
            $file->move('backend/img', $filename);
            $new->img = $filename;
        }
        $new->save();
        return redirect('/admin/news')->with('thongbao', 'Đã sửa thành công!');
        // return redirect('/admin/news');
    }

    function delNew($id)
    {
        $new = News::find($id);
        $new->delete();
        return back()->with('thongbao', 'Đã xóa thành công');
    }
}
