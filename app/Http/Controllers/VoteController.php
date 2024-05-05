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
        $message=$response->message ?? null;
        if($message=='60019 :: Le solde du compte du payeur est insuffisant'){

            return response()->json(["message"=>'Votre Credit est insuffisant',"code"=>20]);
        }

        return response()->json(["message"=>'Votre paiement a bien été initialiser,veuillez confirmer votre paiement',"code"=>21]);
    }

    public function getPaymentStatus($token,$payToken,$id){
        $validation=(new StatusPaymentService())->status($token,$payToken);
        //$response=json_decode($validation);

        if($validation==='SUCCESSFULL'){
            $vote=new Vote;
            $vote->isPaid=true;
            $vote->candidate_id=$id;

            if($vote->save()){
                $candidate=Candidate::find($id);
                $candidate->score=$candidate->score+5;
                $payment=new Payment;
                $payment->vote_id=$vote->id;
                $payment->amount="1";
                $payment->payment_type="orange money";
                $payment->save();
                return response()->json(['status'=>$validation]);
            }
        }else{
            return response()->json(['status'=>$validation]);
        }

    }

    public function success(){
        return view('payment.success');
    }
}
