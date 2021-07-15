<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

use Auth;

class CommentController extends Controller
{

    public function index()
    {
        
        $comment = Comment::all();

        return view('page.details', ['comment' => $comment]);
    }

    public function create()
    {

        
    }


    public function store(Request $request)
    {
        $comment = new Comment();

        $comment->comment = $request->input('comment');
        $comment->post_id = $request->input('post_id');
        $comment->user_id = Auth::user()->id;


        $comment->save();

        return redirect('/user/details/'.$request->input('post_id'));
    }

    public function show(Comment $comment)
    {
        //
    }


    public function edit(Comment $comment)
    {
        //
    }


    public function update(Request $request, Comment $comment)
    {
        //
    }


    public function destroy(Request $request, $id)
    {
        $comment = Comment::find($id);

        $comment->delete();
        return redirect('/user/details/'.$request->input('post_id'));
    }
}
