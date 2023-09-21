<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{

    function register(){

        return view('auth.register');
    }

    function registerstore(Request $req){

        $req->validate([
            'name' => 'required',
            'email' => 'required | unique:users,email',
            'password' => 'required | min:8',
        ]);


        $user = new User();

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        if($user->save()){
            return back()->with('success','Register Successfully');
        }

        return back()->with('error','Register is Declined');

    }

    function login(){

        if(!auth()->user()){
            return view('auth.login');
        }

        return redirect('/dashboard');
    }

    function loginstore(Request $req){

        $credential  = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if(Auth::attempt($credential)){
            return redirect('/dashboard')->with('success','Login Successfully');
        }

        return back()->with('error','Incorrect Username & Password');

    }

    function logout(){

        Auth::logout();

        return redirect()->route('login');

    }

}
