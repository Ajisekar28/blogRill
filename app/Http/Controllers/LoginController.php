<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function action(Request $request)
    {
        // dd($request);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('login')->with('error', 'Email atau password salah');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success','Kamu sudah berhasil logout');
    }

}
