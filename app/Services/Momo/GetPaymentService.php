<?php
namespace App\Services\Momo;

use Illuminate\Support\Facades\Http;

class GetPaymentService{

    public function pay($token){
        $response=Http::asJson()->withToken($token)
        ->post('https://omapi.ynote.africa/prod/webpayment')
        ->withBody(json_encode([
            'API_MUT' => json_encode([
                'subscriberMsisdn' => '659924757',
                'amount' => 10,
                'description' => 'Vote d\'une candidate',
                'customersecret'=>"8adbddd16a48fac2a5696ae995f1095cd8bcfb30483ddaa7db36f74ec06f3056",
                'customerkey'=>"9849e051-7abc-58e9-be25-9dd246f786c7",
                'PaiementMethod'=>"MTN_CMR"
            ])
        ]));
        $data=json_decode($response);
        $messageId=$data->MessageId;
        return $messageId;
    }

}
