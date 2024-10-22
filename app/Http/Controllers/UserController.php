<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    public function register(Request $request) {
      //  $request->validate([
        //    'name' => 'required|string|max:255',
          //  'email' => 'required|string|email|max:255|unique:users',
           // 'password' => 'required|string|min:8|confirmed',
        //]);

        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);
        // $user = User::create([
        //     'name' => "DODO",
        //     'email' => "M@DSASFAF.OCM",
        //     'password' =>"M123"
        // ]);
        $token = $user->createToken("aut_token");
        return response()->json(["token"=>$token->plainTextToken]);
        
        //return response()->json($user, 201);
        //return $user ;
    }
}
