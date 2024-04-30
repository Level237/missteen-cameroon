<?php
namespace App\Services\Om;

use Illuminate\Support\Facades\Http;

class getAccessService{

    public function getAccessToken(){
        $response=Http::withoutVerifying()->asForm()->withHeaders([
            'Authorization' => 'Basic VEVFTkNBTUVST09OXzAxOkZ5YkEzQGI1',
            'Content-Type' => 'application/x-www-form-urlencoded'
        ])->post("https://api-s1.orange.cm/token",[
            'grant_type'=>'client_credentials'
        ]);

        $token=json_decode($response->body());
        return $token->access_token;
    }
}
