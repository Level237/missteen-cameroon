<?php
namespace App\Services\Momo;

use Illuminate\Support\Facades\Http;

class InitTokenService{

    public function initToken($clientId,$clientSecret){

        $response=Http::withBasicAuth($clientId,$clientSecret)
        ->withBody('grant_type=client_credentials', 'application/x-www-form-urlencoded')
        ->post('https://omapi-token.ynote.africa/oauth2/token/');
        $tokenResponse=json_decode($response);
        return $tokenResponse->access_token ?? null;
    }

}
