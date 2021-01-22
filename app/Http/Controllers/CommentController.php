<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'message' => 'required',
        ]);
        $message = $request->message;
        try {
            //code...
            $comment = new Comment;
            $comment->uuid = Uuid::uuid4();
            $comment->comment = $message;
            $comment->user()->associate($request->user());
            $post = Post::find($request->post_id);
            $post->comments()->save($comment);
            return back();
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->with(['error' => 'Internal server error']);
        }
    }

    public function replyStore(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);
        $message = $request->message;
        try {
            //code...
            $reply = new Comment();
            $reply->uuid = Uuid::uuid4();
            $reply->comment = $message;
            $reply->user()->associate($request->user());
            $reply->parent_id = $request->get('comment_id');
            $post = Post::find($request->get('post_id'));
            $post->comments()->save($reply);
            return back();
        } catch (\Throwable $th) {
            throw $th;
            return redirect()->back()->with(['error' => 'Internal server error']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
