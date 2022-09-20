<?php

namespace App\Http\Controllers;
use Zorb\IPay\Facades\IPay;
use Zorb\IPay\Enums\Intent;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        echo "hello";
    }
    public function __invoke()
    {
        $response = IPay::token();
    }
}
