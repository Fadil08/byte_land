<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterAdmin extends Controller
{
    public function showRegis(){
        return view('auth.signUp');
    }

    public function register(Request $request){
        // dd($request);
        $credentials = $request->validate([
            'email' => ['required'],
            'username' => ['required'],
            'password' => ['required'],
            'fotoProfile'=>['required'],
        ]);

        if ($credentials) {
            if($request->hasFile('fotoProfile')){
                $request->file('fotoProfile')->move('assets/profile/',date('YmdHis') . "." .$request->file('fotoProfile')->getClientOriginalName());
                $user = new User();
                $user->name=$request->username;
                $user->email=$request->email;
                $user->password = Hash::make($request->password);
                $user->fotoProfile = date('YmdHis') . "." .$request->file('fotoProfile')->getClientOriginalName();
                $user->role='admin';
                $user->save();
                return redirect('/login');

            }
          
        }
    }
}
