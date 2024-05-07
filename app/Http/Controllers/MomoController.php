<?php

namespace App\Http\Controllers;

use App\Services\Momo\InitTokenService;
use Illuminate\Http\Request;

class MomoController extends Controller
{
    public function initPay(){
        $response=(new InitTokenService())->initToken("3h31rsuu2sg6ggsn6s7u8s6cgs","10jcqne5mgqfhvj9duvppbknr99lokjmfq8bisot89tr5iu6o2m1");

        return $response;
    }
}
