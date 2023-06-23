<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginAdmin extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }
    
    public function auth(Request $request){
        // dd($request);

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
       
            // $email = $request->email;
            // $password = $request->password;
       
            // $user = User::where('email', '=', $email)->first();
            // if (!$user) {
            //    return response()->json(['success'=>false, 'message' => 'Login Fail, please check email id']);
            // }
            // if ($password != $user->password) {
            //    return response()->json(['success'=>false, 'message' => 'Login Fail, pls check password']);
            // }
            //     // return redirect('/admin');

            
            //    return response()->json(['success'=>true,'message'=>'success', 'data' => $user]);
        

        
        
            
        
   

      
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if ($credentials) {
            if (Auth::attempt($credentials)) {
                if (Auth::user()->role == 'user') {
                    // return redirect('/');
                    return 'login user';
                }
                elseif (Auth::user()->role == 'admin') {
                    return redirect('/admin');
                    // return 'berhasil';
                }
            }
            else{
                return back()->with('message','Username atau Password Anda Salah!');
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
