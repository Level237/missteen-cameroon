<?php

namespace App\Services\Om;

use Illuminate\Support\Facades\Http;

class StatusPaymentService{

    public function status($token,$payToken){

        $response=Http::retry(3,400,throw: false)->withToken($token)->withoutVerifying()->withHeaders([
            'X-AUTH-TOKEN' => 'WU5PVEVIRUFEOllOT1RFSEVBRDIwMjA='
        ])->get('https://api-s1.orange.cm/omcoreapis/1.0.2/mp/paymentstatus/'.$payToken);

        $status=json_decode($response->getBody());
         if(isset($status->data->status)){
            return $status->data->status;
         }else{
            return response()->json(["message"=>$status]);
         }


    }
}
