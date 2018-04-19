<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Team;
use \App\Comment;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;

class CommentsController extends Controller
{   

    public function __construct()
    {
        $this->middleware('hateMiddleware',['only' => 'store']);
    }

    public function store($team_id)
    {
    	$team = Team::find($team_id);
        

    	$comment = new Comment;
    	$this->validate(request(),['content'=>'required|min:10']);
    	
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = request('team_id');
        
        $comment->save();

        Mail::to($team)->send(new CommentReceived($team));

    	return redirect()->back();


    }
}




