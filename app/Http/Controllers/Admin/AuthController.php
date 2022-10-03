<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
	{
		if(!auth()->user())
		{
		return view('admin.auth.login');
		}
		else
		{
			return redirect()->route('dashboard');
		}
	}
    public function postLogin(Request $request){
         $request->validate([
            'email'=>'required|email',
            'password'=>'required'

         ]);
        $validated=auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password
         ],$request->password);
        if($validated){
            return redirect()->route('dashboard')->with('success','Login Successfull');
			//return view('admin.auth.dashboard');
			//echo "hello";
        }
        else{
            return redirect()->back()->with('error','Invalid Credentials');
        }

    }
}
