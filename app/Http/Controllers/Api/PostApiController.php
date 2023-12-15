<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResources;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::limit(10)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $post = Post::create([
            'user_id' =>1,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            // 'photo' => $path ?? null,
        ]);

        if (isset($request->tags)) {
            foreach ($request->tags as $tak) {
                $post->tags()->attach($tak);
            }
        }

        return response(['seccess'=>'Post zor yaratding']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        // return $post;

        // return new PostResource($post);
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return 'deleted';
    }
}
