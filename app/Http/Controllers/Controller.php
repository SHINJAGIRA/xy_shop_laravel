<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Register(Request $request){
        $request->validate([
            'username'=>['required','string'],
            'password'=>['required']
        ]);
        User::create([
            'username'=>$request->username,
            'password'=>Hash::make($request->password),
        ]);
        return redirect('/login');
    }

    public function showRegister(){
        return view('auth.register');
    }
    public function showLogin(){
        return view('auth.login');
    }
    public function login(Request $request){
        $request->validate([
            'username'=>['required','string'],
            'password'=>['required']
        ]);
        Auth::attempt([
            'username'=>$request->username,
            'password'=>$request->password
        ]);
        return redirect('/');
    }

    public function logout(){
        Auth::logout();
        return redirect('/signin');
    }
}
