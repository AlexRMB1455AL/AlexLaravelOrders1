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
    $user = User::where('email', $request->email)->first();

    if ($user && $user->password === $request->password) {
        session(['user_id' => $user->id]);
        return redirect('/dashboard');
    }

    return back()->withErrors(['email' => 'Неверные данные']);
}

public function logout() {
    session()->forget('user_id');
    return redirect('/login');
}

public function tests(){

return view('home');
}
}
