<?php
namespace App\Services\Momo;

use Illuminate\Support\Facades\Http;

class StatusService{

    public function getStatus($messageId,$token){

        $response=Http::withToken($token)
        ->withBody(json_encode(
            [
                'customerkey'=>"9849e051-7abc-58e9-be25-9dd246f786c7",
                'customersecret'=>"8adbddd16a48fac2a5696ae995f1095cd8bcfb30483ddaa7db36f74ec06f3056",
                'message_id'=>$messageId
            ],
        ))
        ->post('https://omapi.ynote.africa/prod/webpaymentmtn/status');

        $data=json_decode($response);
        $status=$data->status ?? null;
        return $status;
    }

}
