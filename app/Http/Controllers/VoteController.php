<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\Om\GetAccessTokenService;
use App\Services\Om\InitPaymentService;
use App\Services\Om\ValidationPayment;

class VoteController extends Controller
{
    public function payment(){
        $accessToken=(new GetAccessTokenService())->getAccessToken();
        $payToken=(new InitPaymentService())->index($accessToken->access_token);
        return response()->json(['token'=>$accessToken->access_token,'payToken'=>$payToken],200);
    }

    public function paymentValidation($token,$payToken,$number,$amount){
        $validation=(new ValidationPayment())->paymentValidation($token,$payToken,$number,$amount);
        $response=json_decode($validation);

        if($response->message=='60019 :: Le solde du compte du payeur est insuffisant'){

            return response()->json(["message"=>'Votre Credit est insuffisant',"code"=>20]);
        }

        return response()->json(["message"=>'Votre paiement a bien été initialiser,veuillez confirmer votre paiement',"code"=>21]);
    }
}
