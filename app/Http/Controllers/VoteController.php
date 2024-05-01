<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\Om\GetAccessTokenService;

class VoteController extends Controller
{
    public function payment(){
        $service=(new GetAccessTokenService())->getAccessToken();

        return $service;
    }
}
