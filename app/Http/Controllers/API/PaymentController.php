<?php


namespace App\Http\Controllers\API;

use App\User;
use Paystack;
use App\Http\Requests;
// use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;

class PaymentController extends BaseController
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        // dd($paymentDetails);
        return response()->json($paymentDetails, 200);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}