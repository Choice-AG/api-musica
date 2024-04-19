<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->email == 'admin@gmail.com') {
                $token = $user->createToken('token-admin', ['email' => 'admin@gmail.com'], now()->addHour(2))->plainTextToken;
                return response()->json([
                    'token' => $token,
                    'user' => $user
                ]);
            } else {
                $token = $user->createToken('token-user', [], now()->addHour(2))->plainTextToken;
                return response()->json([
                    'token' => $token,
                    'user' => $user
                ]);
            }
        }

        return response()->json([
            'message' => 'The provided credentials do not match our records.'
        ], 404);
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'password_confirmation' => 'required|same:password'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('token-name')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user
        ]);
    }
}


