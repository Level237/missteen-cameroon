<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

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
        return view('candidate.profile',compact('candidate'));
    }

    public function vote($slug,Request $request){
        $type=$request->type;
        $candidate=Candidate::where('candidate_slug',$slug)->firstOrFail();
        return view('candidate.vote',compact('candidate','type'));
    }

    public function redirect(){

        return back()->with('card','true');
    }
}
