<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use \App\User;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = auth()->id();

        $comments = Comment::all();

        if($id == 1) {
            $comments = Comment::all();
        }

        return view('comments.index', compact('comments'));
    }


    public function create()
    {
        return view('comments.create');
    }


    public function store()
    {


        Comment::create(request(['name', 'body', 'email']) + ['owner_id' => auth()->id()]);


        return redirect('/comments');
    }


    public function show(Comment $comment)
    {
        $this->authorize('update', $comment);

        return view('comments.show', compact('comment'));

    }


    public function edit(Comment $comment)
    {
        $this->authorize('update', $comment);

        return view('comments.edit', compact('comment'));
    }


    public function update(Request $request, Comment $comment)
    {
        $this->authorize('update', $comment);


        $comment->update(request(['name', 'body', 'email']));

        return redirect('/comments');
    }


    public function destroy(Comment $comment)
    {
        $this->authorize('update', $comment);


        $comment->delete();

        return redirect('/comments');
    }
}
