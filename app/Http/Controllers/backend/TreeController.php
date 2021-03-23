<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddTreeRequest;
use App\Http\Requests\EditTreeRequest;
use App\model\Tree;

class TreeController extends Controller
{
    function getTree()
    {
        $data['tree'] = Tree::paginate(6);
        return view('backend.Tree.listTree', $data);
    }

    function backToListTree()
    {
        return view('backend.Tree.listTree');
    }

    function editTree()
    {
        return view('backend.Tree.editTree');
    }

    function getAddTree()
    {
        return view('backend.Tree.addTree');
    }

    function postAddTree(AddTreeRequest $r)
    {
        $tree = new Tree();
        // $tree->code = $r->code;
        $tree->name = $r->name;
        $tree->save();
        return redirect('/admin/tree');
    }

    public function getEditTree(request $r, $id)
    {
        $data['tree'] = Tree::find($id);
        return view('backend.Tree.editTree', $data);
    }

    function postEditTree(EditTreeRequest $r, $id)
    {
        $tree = Tree::find($id);
        // $tree->code = $r->code;
        $tree->name = $r->name;
        $tree->save();
        return redirect('/admin/tree')->with('thongbao', 'Đã sửa thành công!');
    }

    function delTree($id)
    {
        $tree = tree::find($id);
        $tree->delete();
        return back()->with('thongbao', 'Đã xóa thành công');
    }
}
