<?php
namespace App\Services\Om;

use Illuminate\Support\Facades\Http;

class ValidationPayment{

    public static function paymentValidation($token,$payToken,$number,$amount,){
        $response=Http::asJson()->withToken($token)->withoutVerifying()->withHeaders([
            'X-AUTH-TOKEN' => 'WU5PVEVIRUFEOllOT1RFSEVBRDIwMjA=',
        ])->withBody(json_encode(["notifUrl"=>"",
            "channelUserMsisdn"=>"659924757",
            "amount"=>$amount,
            "subscriberMsisdn"=>$number,
            "pin"=>"1470",
            "orderId"=>"order123",
            "description"=>"Vote d'une candidate",
            "payToken"=>$payToken]),'application/json')->post('https://api-s1.orange.cm/omcoreapis/1.0.2/mp/pay',[

        ]);

        return $response;
    }
}
