<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('/auth-login');
        }
        try {
            //code...
            $posts = Post::orderBy('created_at', 'desc')->paginate(20);
            return view('pages.post.manage_post')->with('posts', $posts);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with(['error' => 'Internal server error']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|file|mimes:jpg,png,peg,svg,gif,jpeg|max:1028',
        ]);

        $title = $request->title;
        $description = $request->description;
        try {
            if(Post::where('title', $title)->exists()){
                return back()->with(['error' =>' This post already exist!']);
            }
            $newPost = new Post();
            if($request->hasFile('image')){
                $image = request()->file('image')->store('uploads', 'public');
                $newPost->image = $image; 
            }
            $newPost->uuid = Uuid::uuid4();
            $newPost->title = $title;
            $newPost->description = $description;
            $newPost->save();
            return redirect('/manage-posts')->with('success', 'Post created successfully');
        } catch (\Throwable $th) {
            back()->with(['error' =>' Internal server error!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
