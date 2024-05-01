<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\Om\GetAccessTokenService;
use App\Services\Om\InitPaymentService;

class VoteController extends Controller
{
    public function payment(){
        $accessToken=(new GetAccessTokenService())->getAccessToken();
        $payToken=(new InitPaymentService())->index($accessToken->access_token);
        return response()->json(['token'=>$accessToken->access_token,'payToken'=>$payToken],200);
    }
}
