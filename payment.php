<?php

use Zorb\IPay\Facades\IPay;

class PaymentController
{
    public function __invoke()
    {
        $response = IPay::token();

        echo $response;
    }
}