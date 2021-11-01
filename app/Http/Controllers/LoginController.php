<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function authenticate(Request $authentication_request) {
        $credentials = $authentication_request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if(Auth::attempt($credentials)) {
            $authentication_request->session()->regenerate();

//            return redirect()->
        }
    }

}
