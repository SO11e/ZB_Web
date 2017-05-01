<?php

namespace App\Http\Controllers\Auth;

class LogoutController {
    public function doLogout() {
        AuthController::doLogout();
        
        return redirect()->route('auth.login');
    }
}