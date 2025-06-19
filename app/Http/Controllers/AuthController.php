<?php

namespace App\Http\Controllers;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'email'=> 'required|string|email|max:255|unique:users',
            'password'=> 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'role' => 'user',
            'password'=>Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    public function showLoginForm(){
         return view('login');
    }

    public function login(Request $request){
        $request->validate([ 
            'email'=> 'required|email',
            'password'=> 'required',
        ]);
        if (Auth::attempt($request->only('email','password'))){
            return redirect()->intended('obat');
        }
        return back()->withErrors([
            'email'=> 'jksgjkbsglkbg'
        ]);
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }

}
