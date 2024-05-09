<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Category;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function create(){
        $categories=Category::all();
        return view('candidate.create',compact('categories'));
    }
    public function index(){
        $candidates=Candidate::all();
        return view('candidate.index',compact('candidates'));
    }
    public function store(Request $request){
        $candidate=new Candidate;
        $candidate->candidate_name=$request->candidate_name;
        $candidate->username=$request->username;
        $candidate->age=$request->age;
        $candidate->dossard=$request->dossard;
        $candidate->poids=$request->poids;
        $candidate->city=$request->city;
        $candidate->size=$request->size;
        $image_path = $request->profile->store('candidates', 'public');
        $candidate->profile=$image_path;
        $candidate->category_id=$request->category_id;
        $candidate->candidate_slug=$this->slugify($request->username);
        $candidate->save();
        return to_route('candidates.index')->with('success',"candidate créer avec success");
    }



    public function edit($id){
        $candidate=Candidate::find($id);
        $categories=Category::all();
        return view('candidate.edit',compact('candidate','categories'));
    }
    public function missElu($category){

        return view('candidate.miss-elues',compact('category'));
    }

    public function update(Request $request,$id){
        $candidate=Candidate::find($id);
        $candidate->candidate_name=$request->candidate_name;
        $candidate->username=$request->username;
        $candidate->age=$request->age;
        $candidate->dossard=$request->dossard;
        $candidate->poids=$request->poids;
        $candidate->city=$request->city;
        $candidate->size=$request->size;
        $candidate->category_id=$request->category_id;
        $candidate->candidate_slug=$this->slugify($request->username);
        if($request->hasFile('profile')){
            $image_path = $request->profile->store('candidates', 'public');
            $candidate->profile=$image_path;
        }
        $candidate->save();
        return to_route('candidates.index')->with('success',"candidate mis à jour avec success");
    }

    public function delete($id){
        $candidate=Candidate::find($id);
        $candidate->delete();
        return to_route('candidates.index')->with('success',"candidate supprimé avec success");
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
