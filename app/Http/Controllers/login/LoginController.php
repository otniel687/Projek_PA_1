<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password])) {
            return redirect('/pengrajin');
        }
           return redirect('/login')->with('message','Username atau Password yang anda masukkan Salah');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
