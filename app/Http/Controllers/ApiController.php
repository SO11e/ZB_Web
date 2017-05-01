<?php

namespace App\Http\Controllers;

use GuzzleHttp;

class ApiController {
    /** 
     *  @param string $method HTTP method in capitals
     *  @param string $route API route with leading slash
     *  @param array $headers Request headers in array
     *  @param array $body Request body as string
     *  @return mixed
    */
    public static function doRequest($method, $route, $headers, $body) {
        $client = new GuzzleHttp\Client([
            'base_uri' => "https://zb-api.herokuapp.com", //API BaseURL
            'timeout' => 5, //API request timeout
        ]);
        
        return $client->request($method, $route, ["headers" => $headers, "form_params" => $body, "http_errors" => false]);
    }
}