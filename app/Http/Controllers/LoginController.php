<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    
    public function login_proses(Request $request){

        // dd($request->all());
        $request->validate([
            'username'     => 'required',
            'password'  => 'required'
        ]);

        $data = [
            'username'     => $request->username,
            'password'  => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.home');
            // return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed','Email atau password salah!');
        }

    }

    public function username()
    {
        return 'username';
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function register(){
        return view('auth.register');
    }


    public function register_proses(Request $request){

        //dd($request->all());
        $validator = Validator::make($request->all(),[
            'username'  => 'required',
            'password'  => 'required',
            'email'     => 'required|email',
            'nama'      => 'required'
        ]);
    
        if($validator->fails()) return  redirect()->back()->withInput()->withErrors($validator);
    
        $data['username']       = $request->username;
        $data['password']       = Hash::make($request->password);
        $data['email']          = $request->email;
        $data['nama']           = $request->nama;
        $data['tanggal_daftar'] = date("Y-m-d H:i:s");
    
        User::create($data);
    
        return redirect()->route('login');
    
    }
}
