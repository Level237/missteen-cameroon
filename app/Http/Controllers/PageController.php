<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inscription(){
        return view('pages.inscription');
    }

    public function candidates(){
        return view('candidate.list');
    }

    public function profile(){
        return view('candidate.profile');
    }
}
