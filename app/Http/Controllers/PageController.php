<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Payment;
use App\Models\Vote;
use App\Services\Momo\StatusService;
use App\Services\Om\StatusPaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function inscription(){
        return view('pages.inscription');
    }

    public function candidates(){
        $candidates=Candidate::all();
        return view('candidate.list',compact('candidates'));
    }


    public function profile($slug){
        $candidate=Candidate::where('candidate_slug',$slug)->firstOrFail();
        if(Session::has('token') && Session::has('payToken') && Session::has('candidateId') && Session::get('candidateId')===$candidate->id){

            if(Session::get('candidateId')===$candidate->id){
                $validation=(new StatusPaymentService())->status(Session::get('token'),Session::get('payToken'));
                $response=json_decode($validation);
                if($response==="SUCCESSFULL"){
                    $saveCandidate=$this->saveCandidate(Session::get('candidateId'),Session::get('vote'),Session::get('price'),"Om");
                    if($saveCandidate==true){
                        Session::forget('payToken');
                        Session::forget('token');
                        Session::forget('candidateId');
                        Session::forget('vote');
                        Session::forget('price');
                        Session::forget('type');
                    }
                }
                Session::forget('payToken');
                        Session::forget('token');
                        Session::forget('candidateId');
                        Session::forget('vote');
                        Session::forget('price');
                        Session::forget('type');
            }


        }
        if(Session::has('tokenMomo') && Session::has('messageId') && Session::has('candidateId')){
            if(Session::get('candidateId')===$candidate->id){
                $status=(new StatusService())->getStatus(Session::has('tokenMomo'),Session::has('messageId'));
                $response=json_decode($status);
                if($response==="SUCCESSFULL"){
                    $saveCandidate=$this->saveCandidate(Session::get('candidateId'),Session::get('vote'),Session::get('price'),"Momo");
                    if($saveCandidate==true){
                        Session::forget('messageId');
                Session::forget('tokenMomo');
                Session::forget('candidateId');
                Session::forget('vote');
                Session::forget('price');
                Session::forget('type');
                    }
                }
                Session::forget('messageId');
                Session::forget('tokenMomo');
                Session::forget('candidateId');
                Session::forget('vote');
                Session::forget('price');
                Session::forget('type');
            }
    }
        return view('candidate.profile',compact('candidate'));
    }

    public function vote($slug,Request $request){
        $type=$request->type;
        if(Session::has('token')){
            Session::forget('token');
            Session::forget('payToken');
            Session::forget("price");
            Session::forget("slug");
            Session::forget("candidateId");
            Session::forget("vote");
            Session::forget("type");
        }

        if(Session::has('tokenMomo')){
            Session::forget('messageId');
            Session::forget('tokenMomo');
            Session::forget('candidateId');
            Session::forget("slug");
            Session::forget('vote');
            Session::forget('price');
            Session::forget('type');
        }
        $candidate=Candidate::where('candidate_slug',$slug)->firstOrFail();
        return view('candidate.vote',compact('candidate','type'));
    }

    public function redirect(){

        return back()->with('card','true');
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
