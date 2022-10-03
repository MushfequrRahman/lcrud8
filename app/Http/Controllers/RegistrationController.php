<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function registration(){
        $data=[
            'title'=>'Registration'
        ];
        return view('admin.registration',$data);
    }
    public function create(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $password = Hash::make($password);
        $userType = $request->input('user_type');
        $data=array("name"=>$name,"email"=>$email,"password"=>$password,"user_type"=>$userType,"created_at"=>Now());
        DB::table('users')->insert($data);
        // echo "Record inserted successfully.<br/>";
        // echo '<a href = "/registration">Click Here</a> to go back.';
        return redirect()->route('registration')->with('success','Successfully Registered');
        }
}
