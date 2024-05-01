<?php
namespace App\Services\Om;

use Illuminate\Support\Facades\Http;

class getAccessTokenService{

    public function getAccessToken(){
        $response=Http::withoutVerifying()->asForm()->withHeaders([
            'Authorization' => 'Basic TFNwVENsUW1xa3pPeFNyMmRrZFNyZXFTUFE0YTp1RDg1SE9pMmk4aUdNaEhwTHpNNkc1Y1lVRHdh',
            'Content-Type' => 'application/x-www-form-urlencoded'
        ])->post("https://api-s1.orange.cm/token",[
            'grant_type'=>'client_credentials'
        ]);

        $token=json_decode($response->body());
        return $token;
    }
}
