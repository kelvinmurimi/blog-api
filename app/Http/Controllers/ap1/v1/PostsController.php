<?php

namespace App\Http\Controllers\ap1\v1;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostsResource;

class PostsController extends Controller
{
    //
    public function index()
    {
        return PostsResource::collection(Post::all());
    }


    public function store(StorePostRequest  $request)
    {
        # code...
        Post::create($request->validated());
        return response()->json('post Created');

        
    }
    public function show(Post $post)
    {
       return $post;
    
    }


    public function update(StorePostRequest  $request , Post  $post)
    {
        # code...
        //dd();
        $post->update($request->validated());
        return response()->json('post edited');

        
    }

    public function destroy(Post  $post)
    {
        
        $post->delete();
        return response()->json('post deleted');

        
    }



}
