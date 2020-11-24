<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\OtherPaiement;
use DB;

class OtherPaiementController extends Controller
{
    public $gateway;
 
    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }
 
    public function index()
    {
        return view('payment');
    }
 
    public function charge(Request $request)
    {
        if($request->input('submit'))
        {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $request->input('amount'),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paymentsuccess'),
                    'cancelUrl' => url('paymenterror'),
                ))->send();
          
                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }
    }
 
    public function payment_success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();
         
            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();
         
                // Insert transaction data into the database
                $isPaymentExist = OtherPaiement::where('payment_id', $arr_body['id'])->first();
         
                if(!$isPaymentExist)
                {
                           
                        $payment = new OtherPaiement;
                        $payment->payment_id = $arr_body['id'];
                        $payment->userid = Auth::user()->id;
                        $payment->statut = "actif";
                        $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                        $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                        $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                        $payment->currency = env('PAYPAL_CURRENCY');
                        $payment->payment_status = $arr_body['state'];
                        $payment->startTimeSubscription= strtotime("now");
                        $payment->save();

                }
         
                return "Payment is successful. Your transaction id is: ". $arr_body['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }
 
    public function payment_error()
    {
        return 'User is canceled the payment.';
    }
 
    public function callback4(Request $request){
        $transaction = $request->get('transaction_id');
        
        
            $transaction_id = new OtherPaiement;
            $transaction_id->userid = Auth::user()->id;
            $transaction_id->statut = "actif";
            $transaction_id->payment_id = $transaction;
            $transaction_id->payer_id = Auth::user()->id;
            $transaction_id->payer_email = "NULL";
            $transaction_id->amount = 1;
            $transaction_id->currency = "FCFA";
            $transaction_id->payment_status = "approved";
            $transaction_id->startTimeSubscription= strtotime("now");
            $transaction_id->save();
    
           
            return 'Payment is successful. Your transaction as is: '.$request->get('transaction_id') ;
        
        
    }


    public function paiementLink($pseudo,$categorie)
    {
        if($categorie=="zb-oui")
        {
            return view('user-page/user-other-payment',[
                'second' => 500
                ]);
        }elseif($categorie=="zb-oui")
        {
            return view('user-page/user-other-payment',[
                'second' => 400
                ]);
        }
        
    }
}
