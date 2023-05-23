<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'password'=> 'required',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'password' => bcrypt($fields['password']),
        ]);

        $token = $user->createToken('apptoken')->plainTextToken;
        
        return response()->json(['token' => $token]);
    }
}
