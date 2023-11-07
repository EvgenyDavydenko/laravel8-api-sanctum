<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        // validation
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|confirmed"
        ]);

        // create data
        $u = new User();
        
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = Hash::make($request->password);

        $u->save();

        // send response
        return response()->json([
            "status" => true,
            "message" => "User registered succesfully"
        ]);
    }

    public function login(Request $request){

    }
 
    public function profile(){

    }

    public function logout(){

    }
}
