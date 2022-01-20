<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $fields = $request->validate([
            'name' => 'required|string',
            'email'=>'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);
        $user = User::create([
            'name'=>$fields['name'],
            'email' => $fields['email'],
            'password'=>bcrypt($fields['password'])
        ]);

        $token = $user->createToken('token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response,201);
    }
    public function login(Request $request){
        $fields = $request->validate([
            'email'=>'required|string',
            'password' => 'required|string'
        ]);
        //check Email
        $user = User::where('email',$fields['email'])->first();
        // Check password
        if(!$user || !Hash::check($fields['password'],$user->password)){
            return response([
               'status' => 'error',
               'message' => 'Bad creds'
            ],401);
        }
        $token = $user->createToken('account_auth_token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response,200);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();
        return [
            'status' => 'success',
            'message' => 'Logged Out'
        ];
    }

}
