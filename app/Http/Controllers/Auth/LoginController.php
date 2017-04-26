<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {
    public function showLogin() {
        return view('auth.login');
    }
    
    public function doLogin(Request $request) {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        
        $auth = AuthController::doAuth($request->email, $request->password);
        if($auth) {
            return redirect()->route('app.dashboard');
        }
        
        return redirect()->back()->withMessage('Incorrecte gebruikersnaam en/of wachtwoord!');
    }
}