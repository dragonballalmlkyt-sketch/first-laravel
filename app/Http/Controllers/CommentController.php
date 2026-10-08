<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function index(){

    $comments = Comment::all();

    return view("comments/index", ["comments" => $comments]);

    }

    function create(){
        Comment::create([
            "author" => "Admin",
            "content" => "This is a new comment.",
            "post_id" => 1
        ]);
        return redirect("/comments");

    }

    function show($id){
        $comment = Comment::findOrFail($id);
        return view("comments/show", ["comment" => $comment]);
    }

}
