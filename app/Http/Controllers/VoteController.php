<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Payment;
use App\Models\Vote;
use Illuminate\Http\Request;
use App\Services\Om\GetAccessTokenService;
use App\Services\Om\InitPaymentService;
use App\Services\Om\StatusPaymentService;
use App\Services\Om\ValidationPayment;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class VoteController extends Controller
{
    public function payment($price,$slug,$vote,$candidateId,$type){
        $accessToken=(new GetAccessTokenService())->getAccessToken();

        $payToken=(new InitPaymentService())->index($accessToken->access_token);
        if($payToken){
            Session::put("price",$price);
            Session::put("candidateId",$candidateId);
            Session::put("vote",$vote);
            Session::put('token',$accessToken);
            Session::put('payToken',$payToken);
        }
        return response()->json(['token'=>$accessToken->access_token,'payToken'=>$payToken],200);
    }

    public function paymentValidation($token,$payToken,$number,$amount){
        $validation=(new ValidationPayment())->paymentValidation($token,$payToken,$number,$amount);
        $response=json_decode($validation);
        $message=$response->message ?? null;
        if($message=='60019 :: Le solde du compte du payeur est insuffisant'){

            return response()->json(["message"=>'Votre Credit est insuffisant',"code"=>20]);
        }

        return response()->json(["message"=>'Votre paiement a bien été initialiser,veuillez confirmer votre paiement',"code"=>21]);
    }

    public function getPaymentStatus($token,$payToken,$price,$slug,$vote,$candidateId,$type){
        $validation=(new StatusPaymentService())->status($token,$payToken);
            return response()->json(['status'=>$validation]);


    }

    public function successMomo($candidateId,$vote,$price,$type){

        if(Session::has('tokenMomo') ){
            $saveCandidate=$this->saveCandidate($candidateId,$vote,$price,$type);
        }

            if($saveCandidate==true){
                Session::forget('messageId');
                Session::forget('tokenMomo');
                Session::forget('candidateId');
                Session::forget('vote');
                Session::forget('price');
                Session::forget('type');
                return response()->json(['code'=>200]);
    }

    }

    public function success($candidateId,$vote,$price,$type){

        //$response=json_decode($validation);
            if(Session::has('token') ){
                $saveCandidate=$this->saveCandidate($candidateId,$vote,$price,$type);
            }

            if($saveCandidate==true){

                Session::forget('payToken');
                Session::forget('token');
                Session::forget('candidateId');
                Session::forget('vote');
                Session::forget('price');
                Session::forget('type');
                return response()->json(['code'=>200]);
    }

}

    public function saveCandidate($candidateId,$score,$price,$type){
        $vote=new Vote;
            $vote->isPaid=true;
            $vote->candidate_id=$candidateId;
            if($vote->save()){
                $candidate=Candidate::find($candidateId);
                $candidate->score=$candidate->score+$score;
                $candidate->save();
                $payment=new Payment;
                $payment->vote_id=$vote->id;
                $payment->amount=$price;
                $payment->payment_type=$type;
                $payment->save();
                Session::forget('isView');
                return true;
            }
    }
}
