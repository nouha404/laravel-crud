<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function connexion(Request $request)
    {
        $request->validate([
            // "email" => ["required","email"],
            "email" => "required|email",
            "mdp"   => "required|min:6|max:25"
        ]);
       dd($request->all());
    }
}
