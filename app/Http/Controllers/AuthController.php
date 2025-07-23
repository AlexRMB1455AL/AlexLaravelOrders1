<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{


public function showLoginForm() {
    return view('auth.login');
}

public function login(Request $request) {
    
$validated = $request ->validate([

   'email'=>['required',
   'email',
],

   'password'=>'required|min:4', 
    
]);

    User::create([

        'email' => $request -> email,
        'password'=> $request -> password,
        
    ]);
    
return redirect()->back();
}
}
