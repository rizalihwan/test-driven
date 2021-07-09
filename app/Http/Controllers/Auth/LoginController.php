<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_page()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validate = Auth::attempt($request->only('email', 'password'));
        if(!$validate)
        {
            return back();
        }
        return redirect('/home');
    }
}
