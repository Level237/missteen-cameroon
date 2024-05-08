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

    public function getPaymentStatus($token,$payToken){
        $validation=(new StatusPaymentService())->status($token,$payToken);
        //$response=json_decode($validation);


            return response()->json(['status'=>$validation]);


    }

    public function successMomo(Request $request){
        $messageId=Session::get('messageId') ?? null;
        $isView=Session::get('isView') ?? null;
        $slug=$request->slug;
        if($messageId!==$request->messageId && $isView!==null){

            $saveCandidate=$this->saveCandidate($request->candidateId,$request->slug,$request->vote,$request->price,$request->type);
            if($saveCandidate==true){
                Session::put('messageId',$request->messageId);
            }
        }

        return view('payment.success',compact('slug'));
    }

    public function success(Request $request){

        //$response=json_decode($validation);

            $payToken=Session::get('payToken') ?? null;

            $isView=Session::get('isView') ?? null;
            //Session::forget('payToken');
            $slug=$request->slug;


        if($payToken!==$request->payToken && $isView!==null){

            $saveCandidate=$this->saveCandidate($request->candidateId,$request->slug,$request->vote,$request->price,$request->type);
            if($saveCandidate==true){
                $payToken=Session::put('payToken',$request->payToken);

            }
    }
    return view('payment.success',compact('slug'));

}

    public function saveCandidate($candidateId,$slug,$score,$price,$type){
        $vote=new Vote;
            $vote->isPaid=true;
            $vote->candidate_id=$candidateId;
            $slug=$slug;
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
