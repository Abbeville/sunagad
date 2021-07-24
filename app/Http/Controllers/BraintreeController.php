<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree;

class BraintreeController extends Controller
{
    public function token()
    {

        return response()->json([
            'token' => Braintree\ClientToken::generate()
        ]);
    }
}
