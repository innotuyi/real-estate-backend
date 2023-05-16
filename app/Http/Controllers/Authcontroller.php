<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Authcontroller extends Controller
{
    public function register(Request $request) {

        $user = User::create([
            'name' =>$request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return $user;
    }

    public function login(Request $request) {

      

        $user = User::where('email', $request->email)->first();

        if ( is_null($user) || !Hash::check($request->password, $user->password)) {
            
            throw new ModelNotFoundException("Invalid credentials");
            
        }

        $token = $user->createToken('myapptoken')->plainTextToken;
        
        return $token;
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return true;
    }


}
