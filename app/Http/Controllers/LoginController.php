<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{	
	public function __construct()
    	{
    		$this->middleware('guest',['except' => 'logout']);
    	}

   public function logout()
    {
    	auth()->logout();

    	return redirect('login');
    }

    public function create()
    {
    	return view('login.create');
    }

    public function store()
    {   

        $credentials = request(['email', 'password']);
        $credentials['is_verified'] = NULL; // bolje da sam preko user modela  na fazon slican ovom User::find(request('email'))->is_verified;


        

        
        $valid = \Auth::validate($credentials);
        

        if ($valid)
        { 

        return back()->withErrors([
                'message'=>'Verify your account'
                ]);
        }
        

        
    	if(!Auth()->attempt(
    		request(['email', 'password'])
    		)){
    		return back()->withErrors([
    			'message'=>'Bad credentials'
    			]);
    	}
    return redirect('/');
    }
}
