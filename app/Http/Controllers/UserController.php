<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request,[
            'npm' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'email' => 'required',
            'no_hp' => 'required'
        ]);

        $npm = $request->input('npm');
        $nama = $request->input('nama');
        $password = $request->input('password');
        $hashPassword = Hash::make($password);
        $email = $request->input('email');
        $no_hp = $request->input('no_hp');
        
        $user = User::create([
            'npm' => $npm,
            'nama' => $nama,
            'password' => $hashPassword,
            'email' => $email,
            'no_hp' => $no_hp
        ]);

        return response()->json(['message' => 'success'], 201);
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'npm' => 'required',
            'password' => 'required'
        ]);

        $npm = $request->input('npm');
        $password = $request->input('password');

        $user = User::where('npm', $npm)->first();
        if(!$user){
            return response()->json(['message' => 'login failed'], 401);
        }

        $isValidPassword = Hash::check($password, $user->password);
        if(!$isValidPassword){
            return response()->json(['message' => 'login failed'], 401);
        }

        $generateToken = bin2hex(random_bytes(40));
        $user->update([
            'token' => $generateToken
        ]);

        return response()->json($user);
        // return $generateToken;

    }
}
