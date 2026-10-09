<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Post::paginate(10);
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title'        => 'required|string|max:255',
            'content'      => 'required|string',
            'author'       => 'required|string',
        ]);
        $data = Post::create($validated);
        return response()->json(['message' => 'Post created successfully' , 'data' => $data], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Post::findOrFail($id);


        if(!$data) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json(['message' => 'Post found' , 'data' => $data], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Post::findOrFail($id);


        if(!$data) {
            return response()->json(['message' => 'Post not found'], 404);
        }


        $data->update($request->all());
        return response()->json(['message' => 'Post updated successfully' , 'data' => $data],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Post::findOrFail($id);
        if($data->delete()){
            return response()->json(['message' => 'Post deleted successfully'], 204);
        }else{
            return response()->json(['message' => 'Post not found'], 404);  
        }
    }
}
