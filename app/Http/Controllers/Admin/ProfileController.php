<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function dashboard(){
        $data=[
            'title'=>'Dashboard'
        ];
        return view('admin.dashboard',$data);

    }
	public function userlist(){
        $data=[
            'title'=>'User List'
        ];
        $users = DB::select('select * FROM users');
        return view('admin.userlist',['users'=>$users]);
    }
    public function usereditshow($id){
        $data=[
            'title'=>'User List'
        ];
        $users = DB::select('select * FROM users where id=?',[$id]);
        return view('admin.usereditshow',['users'=>$users]);
    }
    public function useredit(Request $request,$id) {
        $name = $request->input('name');
        $email = $request->input('email');
        $user_type = $request->input('user_type');
        DB::update('update users set name = ?,email=?,user_type=? where id = ?',[$name,$email,$user_type,$id]);
        //echo "Record updated successfully.";
        return redirect()->route('userlist')->with('success','Successfully Updated');
    }
    public function userdelete(Request $request,$id) {
        DB::delete('delete from users where id = ?',[$id]);
        //echo "Record updated successfully.";
        return redirect()->route('userlist')->with('success','Successfully Deleted');
    }
	public function logout(){
        auth()->logout();
        return redirect()->route('getLogin')->with('success','You Have Been Successfully Logged Out');
    }
}
