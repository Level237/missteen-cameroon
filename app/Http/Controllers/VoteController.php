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
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class VoteController extends Controller
{
    public function payment($price,$slug,$vote,$candidateId,$type){
        $accessToken=(new GetAccessTokenService())->getAccessToken();

        $payToken=(new InitPaymentService())->index($accessToken->access_token);

        return response()->json(['token'=>$accessToken->access_token,'payToken'=>$payToken],200);
    }

    public function paymentValidation($token,$payToken,$number,$amount,$candidateId,$score){
        $validation=(new ValidationPayment())->paymentValidation($token,$payToken,$number,$amount);
        $response=json_decode($validation);
        $message=$response->message ?? null;
        $txnid=$response->data->txnid ?? null;
        if($message=='60019 :: Le solde du compte du payeur est insuffisant'){

            return response()->json(["message"=>'Votre Credit est insuffisant',"code"=>20]);
        }
        $vote=new Vote;
        $vote->isPaid=false;
        $vote->candidate_id=$candidateId;
        $vote->save();
        $payment=new Payment;
        $payment->vote_id=$vote->id;
        $payment->amount=$amount;
        $payment->payment_type="Om";
        $payment->expire_at=Carbon::now()->addMinutes(10);
        $payment->txnid=$txnid;
        $payment->score=$score;
        $payment->save();
        return response()->json(["message"=>'Votre paiement a bien été initialiser,veuillez confirmer votre paiement',"code"=>21]);
    }

    public function getPaymentStatus($token,$payToken,$price,$slug,$vote,$candidateId,$type){
        $validation=(new StatusPaymentService())->status($token,$payToken);
            return response()->json(['status'=>$validation]);
    }

    public function successMomo($candidateId,$vote,$price,$type){


                return response()->json(['code'=>200]);


    }

    public function success($candidateId,$vote,$price,$type){

        //$response=json_decode($validation);

                return response()->json(['code'=>200]);


}
public function notifyOm(){
    $data=file_get_contents('php://input');
    $payload=json_decode($data,true);

    //je recupere mon txnid de la base de donnée et je le compare avec le present txnid de l'om

    $payment=Payment::where('txnid',$payload->txnid)->first();
    $now = Carbon::now();

    if($payment && $payload->status==="SUCCESS" && $now->isBefore($payment->expire_at)){
        $vote=Vote::find($payment->vote_id);
        $vote->isPaid=true;
        $vote->save();
        //on enregistre le vote lié a un candidat
        $saveCandidate=$this->saveCandidate($vote->candidate_id,$payment->score,$payment->amount,"Om");
        return response()->json(['message'=>"accepted"]);
    }
    return response()->json(['message'=>$data]);
}
public function notifyMomo(){
    $data=file_get_contents('php://input');
    $payload=json_decode($data,true);

    //je recupere mon txnid de la base de donnée et je le compare avec le present txnid de l'om

   return response()->json(['data'=>"data"]);

}

    public function saveCandidate($candidateId,$score,$price,$type){

                $candidate=Candidate::find($candidateId);
                $candidate->score=$candidate->score+$score;
                $candidate->save();
                //Session::forget('isView');
                return true;

    }


}
