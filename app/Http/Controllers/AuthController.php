<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(LoginRequest $request) {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'errors' => [
                    'email' => [
                        "El correo o la contraseña son incorrectas"
                    ]
                ]
            ], 401);
        }

        $user = Auth::user();
        return [
            'token' => $user->createToken('login')->plainTextToken,
            'user' => $user
        ];

    }

    public function register(RegisterRequest $request) {
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        // return response()->json([
        //     'token' => $user->createToken('token')->plainTextToken,
        //     'user' => $user
        // ]);

        return [
            'token' => $user->createToken('register')->plainTextToken,
            'user' => $user
        ];

    }

    public function logout(Request $request) {
        $user = $request->user();
        $user->currentAccessToken()->delete();
        return [
            'user' => null
        ];
        // return response()->json([
        //     'message' => $request->user()
        // ]);
    }

}
