<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Vote;
use App\Services\Momo\GetPaymentService;
use App\Services\Momo\InitTokenService;
use App\Services\Momo\StatusService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MomoController extends Controller
{
    public function initPay($price,$number,$candidateId,$vote){
        $token=(new InitTokenService())->initToken("3h31rsuu2sg6ggsn6s7u8s6cgs","10jcqne5mgqfhvj9duvppbknr99lokjmfq8bisot89tr5iu6o2m1");
        Session::put("tokenMomo",$token);
        Session::save();
        Session::put("price",$price);
        Session::save();
        Session::put("type","Momo");
        Session::save();
        Session::put("candidateId",$candidateId);
        Session::save();
        Session::put("vote",$vote);
        Session::save();
            return response()->json(['token'=>$token,'status'=>200]);


    }

    public function getPay($token,$price,$number,$candidateId,$score){
        $messageId=(new GetPaymentService())->pay($token,$price,$number);
        Session::put('messageId',$messageId);
        Session::save();
        if($messageId==null){
            return response()->json(['messageId'=>null],400);
        }else{

            return response()->json(['messageId'=>$messageId]);
        }

    }

    public function getStatus($messageId,$token){
        $status=(new StatusService())->getStatus($messageId,$token);
        return response()->json(['status'=>$status]);
    }
}
