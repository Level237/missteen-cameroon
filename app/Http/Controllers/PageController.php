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
}
