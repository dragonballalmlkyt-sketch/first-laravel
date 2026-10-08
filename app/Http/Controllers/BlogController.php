<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function index(){

    $posts = Post::paginate(5);

    return view("BLOG/index", ["posts" => $posts]);

    }

    function create(){
        // Post::create([
        //     "title" => "New unique Post",
        //     "content" => "This is a new post.",
        //     "author" => "Admin"
        // ]);
        Post::factory(100)->create();
        return redirect("/blog");

    }

    function delete(){
        $post = Post::find(1);
        $post->comments()->delete();
        $post->delete();
        return redirect("/blog");
    }

    function show($id){
        $post = Post::findOrFail($id);
        return view("BLOG/show", ["post" => $post]);
    }



}
