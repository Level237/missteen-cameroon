<?php
namespace App\Services\Om;

use Illuminate\Support\Facades\Http;

class PaymentValidationService{
    public function index($token,$payToken,$number,$amount){
        $response=Http::asJson()->withToken($token)->withoutVerifying()->withHeaders([
            'X-AUTH-TOKEN' => 'WU5PVEVIRUFEOllOT1RFSEVBRDIwMjA=',
        ])->withBody(json_encode([
            "channelUserMsisdn"=>"659924757",
            "amount"=>$amount,
            "subscriberMsisdn"=>$number,
            "notifUrl"=>"https://hook.eu2.make.com/fhb8jjq097ciqzi6kslweyk4u7h0w82l",
            "pin"=>"1470",
            "orderId"=>"order123",
            "description"=>"Votes des candidats miss teen",
            "payToken"=>$payToken]),'application/json')->post('https://api-s1.orange.cm/omcoreapis/1.0.2/mp/pay',[

        ]);

        return $response;
    }
}
