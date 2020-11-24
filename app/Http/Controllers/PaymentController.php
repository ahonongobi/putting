<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;
class PaymentController extends Controller
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
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();
         
                if(!$isPaymentExist)
                {
                    $count2 =  Payment::where('iduser', Auth::user()->id)
                        
                        ->count();
                    if($count2 == 0){        
                        $payment = new Payment;
                        $payment->payment_id = $arr_body['id'];
                        $payment->iduser = Auth::user()->id;
                        $payment->statut = "actif";
                        $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                        $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                        $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                        $payment->currency = env('PAYPAL_CURRENCY');
                        $payment->payment_status = $arr_body['state'];
                        $payment->startTimeSubscription= strtotime("now");
                        $payment->save();

                        $user = new User();
                        $user = User::find(Auth::user()->id);
                        $user->subscription = 'actif';
                        $user->update();

                    }
                    else
                    {
                        DB::update("update payments SET iduser=?,statut=?,payment_id=?,payer_id=?,payer_email=?,amount=?,currency=?,payment_status=?,startTimeSubscription=?,created_at=? WHERE iduser=? ",[
                            Auth::user()->id,
                            "actif",
                            $arr_body['id'],
                            Auth::user()->id,
                            "NULL",
                            $arr_body['transactions'][0]['amount']['total'],
                            env('PAYPAL_CURRENCY'),
                            $arr_body['state'],
                            strtotime("now"),
                            NOW(),
                            Auth::user()->id,
                        ]);
                        
                        $user = new User();
                        $user = User::find(Auth::user()->id);
                        $user->subscription = 'actif';
                        $user->update();
                    }
                    
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
 
    public function callback(Request $request){
        $transaction = $request->get('transaction_id');
        
        $count2 =  Payment::where('iduser', Auth::user()->id)
                        
                        ->count();
        if($count2 == 0){
            $transaction_id = new Payment;
            $transaction_id->iduser = Auth::user()->id;
            $transaction_id->statut = "actif";
            $transaction_id->payment_id = $transaction;
            $transaction_id->payer_id = Auth::user()->id;
            $transaction_id->payer_email = "NULL";
            $transaction_id->amount = 1;
            $transaction_id->currency = "FCFA";
            $transaction_id->payment_status = "approved";
            $transaction_id->startTimeSubscription= strtotime("now");
            $transaction_id->save();
    
            $user = new User();
            $user = User::find(Auth::user()->id);
            $user->subscription = 'actif';
            $user->update();
            return 'Payment is successful. Your transaction as is: '.$request->get('transaction_id') ;
        }
        else{

            DB::update("update payments SET iduser=?,statut=?,payment_id=?,payer_id=?,payer_email=?,amount=?,currency=?,payment_status=?,startTimeSubscription=?,created_at=? WHERE iduser=? ",[
                Auth::user()->id,
                "actif",
                $transaction,
                Auth::user()->id,
                "NULL",
                1,
                "FCFA",
                "approved",
                strtotime("now"),
                NOW(),
                Auth::user()->id,
            ]);
            
            $user = new User();
            $user = User::find(Auth::user()->id);
            $user->subscription = 'actif';
            $user->update();
            return 'Payment is successful. Your transaction as is: '.$request->get('transaction_id') ;
        }
        


        
        
    }

    public function callback1(Request $request){
        $transaction = $request->get('transaction_id');
        
        $count2 =  Payment::where('iduser', Auth::user()->id)
                        
        ->count();
        if($count2 == 0){
        $transaction_id = new Payment;
        $transaction_id->iduser = Auth::user()->id;
        $transaction_id->statut = "actif";
        $transaction_id->payment_id = $transaction;
        $transaction_id->payer_id = Auth::user()->id;
        $transaction_id->payer_email = "NULL";
        $transaction_id->amount = 2;
        $transaction_id->currency = "FCFA";
        $transaction_id->payment_status = "approved";
        $transaction_id->startTimeSubscription= strtotime("now");
        $transaction_id->save();

        $user = new User();
        $user = User::find(Auth::user()->id);
        $user->subscription = 'actif';
        $user->update();
        
        return 'Payment is successful. Your transaction as is: '.$request->get('transaction_id') ;
    }
    else{

        DB::update("update payments SET iduser=?,statut=?,payment_id=?,payer_id=?,payer_email=?,amount=?,currency=?,payment_status=?, startTimeSubscription=?,created_at=? WHERE iduser=? ",[
            Auth::user()->id,
            "actif",
            $transaction,
            Auth::user()->id,
            "NULL",
            1,
            "FCFA",
            "approved",
            strtotime("now"),
            NOW(),
            Auth::user()->id,
        ]);
        
        $user = new User();
        $user = User::find(Auth::user()->id);
        $user->subscription = 'actif';
        $user->update();
        return 'Payment is successful. Your transaction as is: '.$request->get('transaction_id') ;
    }
    }
    public function callback2(Request $request){
        $transaction = $request->get('transaction_id');
        $count2 =  Payment::where('iduser', Auth::user()->id)
                        
        ->count();
        if($count2 == 0){
        $transaction_id = new Payment;
        $transaction_id->iduser = Auth::user()->id;
        $transaction_id->statut = "actif";
        $transaction_id->payment_id = $transaction;
        $transaction_id->payer_id = Auth::user()->id;
        $transaction_id->payer_email = "NULL";
        $transaction_id->amount = 3;
        $transaction_id->currency = "FCFA";
        $transaction_id->payment_status = "approved";
        $transaction_id->startTimeSubscription= strtotime("now");
        $transaction_id->save();
        
        $user = new User();
        $user = User::find(Auth::user()->id);
        $user->subscription = 'actif';
        $user->update();
        return 'Payment is successful. Your transaction as is: '.$request->get('transaction_id') ;
        }
        else{

            DB::update("update payments SET iduser=?,statut=?,payment_id=?,payer_id=?,payer_email=?,amount=?,currency=?,payment_status=?,startTimeSubscription=?,created_at=? WHERE iduser=? ",[
                Auth::user()->id,
                "actif",
                $transaction,
                Auth::user()->id,
                "NULL",
                1,
                "FCFA",
                "approved",
                strtotime("now"),
                NOW(),
                Auth::user()->id,
            ]);
            
            $user = new User();
            $user = User::find(Auth::user()->id);
            $user->subscription = 'actif';
            $user->update();
            return 'Payment is successful. Your transaction as is: '.$request->get('transaction_id') ;
        }
    }

    public function callback3(Request $request){
        $transaction = $request->get('transaction_id');
        $count2 =  Payment::where('iduser', Auth::user()->id)
                        
        ->count();
        if($count2 == 0){
        $transaction_id = new Payment;
        $transaction_id->iduser = Auth::user()->id;
        $transaction_id->statut = "actif";
        $transaction_id->payment_id = $transaction;
        $transaction_id->payer_id = Auth::user()->id;
        $transaction_id->payer_email = "NULL";
        $transaction_id->amount = 4;
        $transaction_id->currency = "FCFA";
        $transaction_id->payment_status = "approved";
        $transaction_id->startTimeSubscription= strtotime("now");
        $transaction_id->save();
        
        $user = new User();
        $user = User::find(Auth::user()->id);
        $user->subscription = 'actif';
        $user->update();
        return 'Payment is successful. Your transaction as is: '.$request->get('transaction_id') ;
        }
        else{

            DB::update("update payments SET iduser=?,statut=?,payment_id=?,payer_id=?,payer_email=?,amount=?,currency=?,payment_status=?,startTimeSubscription=?,created_at=? WHERE iduser=? ",[
                Auth::user()->id,
                "actif",
                $transaction,
                Auth::user()->id,
                "NULL",
                1,
                "FCFA",
                "approved black",
                strtotime("now"),
                NOW(),
                Auth::user()->id,
            ]);
            
            $user = new User();
            $user = User::find(Auth::user()->id);
            $user->subscription = 'actif';
            $user->update();
            return 'Payment is successful. Your transaction as is: '.$request->get('transaction_id') ;
        }
    }
}