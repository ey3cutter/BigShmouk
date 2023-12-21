<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        // validate data 
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // login code 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }

        return redirect('login')->withError('Логин или пароль введены неверно.');

    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request){
        // validate 
        // dd($request);
        $request->validate([
            'name_surname'=>'required',
            'phone'=>'required',
            'email' => 'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        // save in users table 
        
        User::create([
            'name_surname'=>$request->name_surname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password)
        ]);

        // login user here 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('login');
        }

        return redirect('register')->withError('Ошибка регистрации');


    }



    public function home(){
        return view('app.home');
    }

     public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
    
}
