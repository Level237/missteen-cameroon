<?php
namespace App\Services\Momo;

use Illuminate\Support\Facades\Http;

class GetPaymentService{

    public function pay($token,$price,$number){
        $response=Http::asJson()->withToken($token)
        ->withBody(json_encode([
            'API_MUT' =>[
                "notifUrl"=>"https://hook.eu2.make.com/fhb8jjq097ciqzi6kslweyk4u7h0w82l",
                'subscriberMsisdn' =>$number,
                'description' => 'Vote d\'une candidate',
                'amount' =>$price,
                "order_id"=>"order".rand(123456789, 100000000),
                'customersecret'=>"8adbddd16a48fac2a5696ae995f1095cd8bcfb30483ddaa7db36f74ec06f3056",
                'customerkey'=>"9849e051-7abc-58e9-be25-9dd246f786c7",
                'PaiementMethod'=>"MTN_CMR"
            ],
        ]),'application/json')
        ->post('https://omapi.ynote.africa/prod/webpayment')
        ;
        $data=json_decode($response);
        $messageId=$data->MessageId ?? null;
        return $messageId;
    }

}
