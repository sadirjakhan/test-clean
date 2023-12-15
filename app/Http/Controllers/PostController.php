<?php

namespace App\Http\Controllers;

use App\Event\PostCreated;

use App\Http\Requests\StorePostRequest;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;
use App\Mail\PostCreated as MailPostCreated;
use App\Models\User;
use App\Notifications\PostCreated as NotificationsPostCreated;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        // $this->middleware('password.confirm')->only('edit');
    }













    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $user = User::first();
        // dd($user->name);



        $response = Http::get('http://example.com');
        dd($response);


        $posts = Cache::remember('posts', 25,  function () {
            return Post::latest()->get();
        });;

        // $posts = Post::latest()->get();

        return view('posts.index')->with('posts', $posts);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create')->with([
            'categories' => Category::all(),
            'tags' => Tag::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // dd($request);/
        // if ($request->hasFile('photo')) {
        //     $name = $request->file('photo')->getClientOriginalName();
        //     $path = $request->file('photo')->storeAs('post-photos', $name);
        // }



        // dd($path);




        $post = Post::create([
            'user_id' => auth()->user()->id,
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

        PostCreated::dispatch($post);

        // auth()->user()->notify(new NotificationsPostCreated ($post) );
        FacadesNotification::send(auth()->user(), new NotificationsPostCreated($post));

        // Mail::to($request->user())->send(new MailPostCreated ($post));

        return redirect()->route("posts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('posts.show')->with([
            'post' => $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(5),
            'categories' => Category::all(),
            'tags' => Tag::all(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //   if (!Gate::allows('update-post', $post)){
        //     abort(403);
        Gate::authorize('update-post', $post);
        return view('Posts.edit')->with(['post' => $post]);
    }




    public function update(StorePostRequest $request, Post $post)
    {
        Gate::authorize('update-post', $post);


        //    if ($request->hasFile('photo')) 
        //     if(isset($post->photo)){
        //        Storage::delete($post->photo);
        //     




        //             $name = $request->file('photo')->getClientOriginalName();
        //             $path = $request->file('photo')->storeAs('post-photos', $name);
        //         




        $post->update([
            'title' => $request->title,
            'short_content' => $request->short_content,
            'content' => $request->content,
            // 'photo' => $path ?? null,
        ]);

        return redirect()->route('posts.index', ['post' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)

    {
        Gate::authorize('delete', $post);
        // if(isset($post->photo))
        // Storage::delete($post->photo);
        $post->delete();
        return redirect()->route("posts.index");
    }
}
