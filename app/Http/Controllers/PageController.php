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
        if(Session::has('payToken') && Session::get('type')==="Om" && Session::get('candidateId')==$candidate->id){
            $validation=(new StatusPaymentService())->status(Session::get('token'),Session::get('payToken'));
            $response=json_decode($validation);
            if($validation=="SUCCESSFULL"){
                $saveCandidate=$this->saveCandidate(Session::get('candidateId'),Session::get('vote'),Session::get('price'),"Om");
                        Session::forget('payToken');
                        Session::forget('token');
                        Session::forget('candidateId');
                        Session::forget('vote');
                        Session::forget('price');
                        Session::forget('type');
                        //return "success";
                        return to_route('candidate.profile',$slug);
            }


            //return Session::forget('payToken');
        }
        if(Session::has('tokenMomo') && Session::get('type')==="Momo" && Session::get('candidateId')==$candidate->id){
            $status=(new StatusService())->getStatus(Session::get('messageId'),Session::get('tokenMomo'));
            if($status==="SUCCESSFUL"){
                $saveCandidate=$this->saveCandidate(Session::get('candidateId'),Session::get('vote'),Session::get('price'),"Momo");
                Session::forget('messageId');
                Session::forget('tokenMomo');
                Session::forget('candidateId');
                Session::forget("slug");
                Session::forget('vote');
                Session::forget('price');
                Session::forget('type');
                return to_route('candidate.profile',$slug);
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
                //Session::forget('isView');
                return true;
            }
    }

    public function listVote(){
        $candidates=Candidate::orderBy('score','desc')->get();
        return view('pages.listVote',compact('candidates'));
    }
}
