<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function create(){
        return view('candidate.create');
    }
    public function index(){
        return view('candidate.index');
    }
    public function store(Request $request){
        $candidate=new Candidate;
        $candidate->candidate_name=$request->candidate_name;
        $candidate->phone_number=$request->phone_number;
        $candidate->age=$request->age;
        $candidate->description=$request->description;
        $candidate->city=$request->city;
        $candidate->size=$request->size;
        $image_path = $request->course_profile->store('candidates', 'public');
        $candidate->profile=$image_path;
        $candidate->category_id=$request->category_id;
        $candidate->candidate_slug=$this->slugify($request->candidate_name);
        $candidate->save();
        return $candidate;
    }

    function slugify($string, $delimiter = '-') {
        $oldLocale = setlocale(LC_ALL, '0');
        setlocale(LC_ALL, 'en_US.UTF-8');
        $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
        $clean = strtolower($clean);
        $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
        $clean = trim($clean, $delimiter);
        setlocale(LC_ALL, $oldLocale);
        return $clean;
    }
}
