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


            return response()->json(['status'=>$validation]);


    }

    public function success(Request $request){
        $response=Http::withToken($request->token)->withoutVerifying()->withHeaders([
            'X-AUTH-TOKEN' => 'WU5PVEVIRUFEOllOT1RFSEVBRDIwMjA='
        ])->get('https://api-s1.orange.cm/omcoreapis/1.0.2/mp/paymentstatus/'.$request->payToken);

        $status=json_decode($response->getBody());
         if(isset($status->data->status)){
            $validation= $status->data->status;
         }
        //$response=json_decode($validation);


        if($validation==='SUCCESSFULL'){
            $vote=new Vote;
            $vote->isPaid=true;
            $vote->candidate_id=$request->candidateId;

            if($vote->save()){
                $candidate=Candidate::find($request->candidateId);
                $candidate->score=$candidate->score+5;
                $candidate->save();
                $payment=new Payment;
                $payment->vote_id=$vote->id;
                $payment->amount=$request->price;
                $payment->payment_type=$request->type;
                $payment->save();
                return view('payment.success');
            }

    }else{
        return "Unable to process payment";
    }}
}
