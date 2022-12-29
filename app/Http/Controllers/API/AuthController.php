<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Personal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //register
    public function register(Request $request)
    {
        $attrs = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $attrs['email'],
            'email' => $attrs['email'],
            'password' => bcrypt($attrs['password'])
        ]);

        //$token = $user->createToken('secret')->plainTextToken;

        Personal::create([
            'nombre' => $attrs['email'],
            'userId' => $user->id
        ]);

        return response([
            'user' => $user,
            //'token' => $token
        ], 200);
    }

    //Login
    public function login(Request $request)
    {
        $attrs = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $user = User::where("email", $attrs['email'])->first();
        if (isset($user->id)) {
            if (Hash::check($attrs['password'], $user->password)) {
                $token = $user->createToken("auth_token")->plainTextToken;
                return response([
                    'user' => $user,
                    'token' => $token
                ], 200);
            }
            else {
                return response([
                    'message' => 'Invalid password'
                ], 403);
            }
        }
        else {
            return response([
                'message' => 'Invalid credentials'
            ], 403);
        }
    }

    //Logout
    public function logout()
    {
        $user = Auth::user();
        $user->tokens()->delete();
        return response([
            'message' => 'Logout success'
        ], 200);
    }

    public function user()
    {
        return response([
            'user' => auth()->user()
        ], 200);
    }

    //Forgot Password

}
