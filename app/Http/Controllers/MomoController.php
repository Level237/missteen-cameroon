<?php

namespace App\Http\Controllers;

use App\Services\Momo\GetPaymentService;
use App\Services\Momo\InitTokenService;
use App\Services\Momo\StatusService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MomoController extends Controller
{
    public function initPay($price,$number,$candidateId,$vote){
        $token=(new InitTokenService())->initToken("3h31rsuu2sg6ggsn6s7u8s6cgs","10jcqne5mgqfhvj9duvppbknr99lokjmfq8bisot89tr5iu6o2m1");
        $messageId=(new GetPaymentService())->pay($token,$price,$number);
        if($messageId==null || $token==null){
            return response()->json(['status',404]);
        }else{
            Session::put('messageId',$messageId);
            Session::put('tokenMomo',$token);
            Session::put("price",$price);
            Session::put("candidateId",$candidateId);
            Session::put("vote",$vote);
            return response()->json(['messageId'=>$messageId,'token'=>$token,'status'=>200]);
        }

    }

    public function getStatus($messageId,$token){
        $status=(new StatusService())->getStatus($messageId,$token);
        return response()->json(['status'=>$status]);
    }
}
