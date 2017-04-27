<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Auth\AuthController;
use Closure;

class LoginRequired {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (AuthController::checkAuth()) {
            return $next($request);
        }
        
        return redirect()->route("auth.login")->withMessage("U dient ingelogd te zijn om deze pagina te bekijken!");
    }
}