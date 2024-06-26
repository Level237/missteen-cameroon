<?php
namespace App\Services\Om;

use Illuminate\Support\Facades\Http;

class PaymentValidationService{
    public function index($token,$payToken,$number,$amount){
        $response=Http::asJson()->withToken($token)->withoutVerifying()->withHeaders([
            'X-AUTH-TOKEN' => 'WU5PVEVIRUFEOllOT1RFSEVBRDIwMjA=',
        ])->withBody(json_encode([
            "notifUrl"=>"https://webhook.site/8e21abbe-a7d1-4368-b13b-bf7c5d34e7e0",
            "channelUserMsisdn"=>"659924757",
            "amount"=>$amount,
            "subscriberMsisdn"=>$number,
            "pin"=>"1470",
            "orderId"=>"order123",
            "description"=>"Votes des candidats miss teen",
            "payToken"=>$payToken]),'application/json')->post('https://api-s1.orange.cm/omcoreapis/1.0.2/mp/pay',[

        ]);

        return $response;
    }
}
