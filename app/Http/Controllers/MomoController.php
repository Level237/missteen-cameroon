<?php

namespace App\Http\Controllers;

use App\Services\Momo\GetPaymentService;
use App\Services\Momo\InitTokenService;
use Illuminate\Http\Request;

class MomoController extends Controller
{
    public function initPay(){
        $token=(new InitTokenService())->initToken("3h31rsuu2sg6ggsn6s7u8s6cgs","10jcqne5mgqfhvj9duvppbknr99lokjmfq8bisot89tr5iu6o2m1");
        $messageId=(new GetPaymentService($token))->pay($token);
        if($messageId==null || $token==null){
            return response()->json(['error',404]);
        }else{
            return response()->json(['messageId'=>$messageId,'token'=>$token]);
        }

    }
}
