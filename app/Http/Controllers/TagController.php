<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){

    $tags = Tag::all();

    return view("tags/index", ["tags" => $tags]);

    }

    function create(){
        Tag::create([
            "title" => "Software engineering"
        ]);
        return redirect("/tags");

    }

    function show($id){
        $tag = Tag::findOrFail($id);
        return view("tags/show", ["tag" => $tag]);
    }

    function Post_tags(){
        $post1 = Post::find(2);

        $post2 = Post::find(3);

        $post1->tags()->attach([1,2]);
        $post2->tags()->attach([1,2]);

        return response()->json([
            "message" => "Tags attached to posts successfully",
            '$post1' => $post1->tags,
            '$post2' => $post2->tags
        ]);
    }
}
