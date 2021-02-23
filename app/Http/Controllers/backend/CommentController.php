<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Comment;

class CommentController extends Controller
{
    function getComment(){
        return view('backend.Comment.comment');
    }

    function editComment(){
        return view('backend.Comment.editcomment');
    }
}
