<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Team;
use \App\Comment;

class CommentsController extends Controller
{   

    public function __construct()
    {
        $this->middleware('hateMiddleware',['only' => 'store']);
    }

    public function store()
    {
    	

    	$comment = new Comment;
    	$this->validate(request(),['content'=>'required|min:10']);
    	
        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = request('team_id');
        
        $comment->save();

    	return redirect()->back();


    }
}




