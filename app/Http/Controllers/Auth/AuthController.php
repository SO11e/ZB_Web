<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;

class AuthController {
    
    /**
     * Provide email and password to authenticate user on valid credentials
     * 
     * @param string $email User email address
     * @param string $password User password
     * @returns boolean
     */
    public static function doAuth($email, $password) {
        $apiresponse = ApiController::doRequest("POST", "/login", [], ["email" => $email, "password" => $password]);
        
        if($apiresponse->getStatusCode() == 200) {
            session(["auth-token" => $apiresponse->getBody()]);
            return true;
        }
        return false;
    }
    
    
    /**
     * Check user authentication based on JWT token stored in session
     * 
     * @return bool
     */
    public static function checkAuth() {
        if(session("auth-token", null) == null){ return false; }
    
        $apiresponse = ApiController::doRequest("GET", "/isloggedin", ["bearer" => session("auth-token")], []);
        if($apiresponse->getStatusCode() == 200) { return true; }
        
        return false;
    }
    
    /**
     * Returns JWT token based on currently signed in user. Returns empty string when user is not signed in
     * 
     * @return string
     */
    public static function getToken() {
        return session("auth-token", "");
    }
}