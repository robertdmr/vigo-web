<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (!$token = auth()->attempt($credentials)) {
            return redirect()->back()->withErrors([
                'email' => 'Las credenciales no coinciden con nuestros registros.',
            ]);
        }
        return redirect()->route('admin.panel');
    }
}
