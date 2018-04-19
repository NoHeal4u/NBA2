<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class VerificationController extends Controller
{
     public function store($user_id)
    {   

    // DB::table('users')
    //     ->where('id', $user_id)  
    //     ->limit(1)  
    //     ->update('is_verified', true));  
        
    // return view('login');
    // }

$user = \App\User::find($user_id);

$user->is_verified = true;

$user->save();

return redirect('login');

}
}
