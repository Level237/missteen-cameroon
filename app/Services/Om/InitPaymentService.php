<?php

namespace App\Services\Om;

use Illuminate\Support\Facades\Http;

class InitPaymentService{

    public function index($token){
        $response=Http::withToken($token)->withoutVerifying()->withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'X-AUTH-TOKEN' => 'WU5PVEVIRUFEOllOT1RFSEVBRDIwMjA=',
        ])->post('https://api-s1.orange.cm/omcoreapis/1.0.2/mp/init');
        $tokenPay=json_decode($response->body());
        return $tokenPay->data->payToken;
    }
}
