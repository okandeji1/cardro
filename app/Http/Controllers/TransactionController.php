<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest()) {
            //is a guest so redirect
            return redirect('/auth-login');
        }
        try {
            //code...
            $transactions = Transaction::orderBy('created_at', 'desc')->paginate(20);
            return view('pages.transaction.manage_transaction')->with('transactions', $transactions);
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with(['error' => 'Internal server error']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback($reference)
    {
        try {
            //code...
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . $reference,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: application/json",
                    "Authorization: Bearer sk_test_ff3a8ca11cc7f69d32fd07eb56cde367ac421938",
                    "Cache-Control: no-cache",
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            $decode = json_decode($response, true);
            $customerName = $decode['data']['metadata']['custom_fields'][0]['value'];
            $customerEmail = $decode['data']['metadata']['custom_fields'][1]['value'];
            $customerPhone = $decode['data']['metadata']['custom_fields'][2]['value'];
            $productName = $decode['data']['metadata']['custom_fields'][3]['value'];
            $amount = $decode['data']['amount'] / 100;
            $paymentType = $decode['data']['authorization']['channel'];
            $reference = $decode['data']['reference'];
            try {
                //code...
                $product = Product::where('name', $productName)->firstOrFail();
                $product_id = $product->id;

                $newTransaction = new Transaction();
                $newTransaction->uuid = Uuid::uuid4();
                $newTransaction->product_id = $product_id;
                $newTransaction->price = $amount;
                $newTransaction->customerName = $customerName;
                $newTransaction->customerEmail = $customerEmail;
                $newTransaction->customerPhone = $customerPhone;
                $newTransaction->paymentType = $paymentType;
                $newTransaction->reference = $reference;
                $newTransaction->save();
                return redirect('/')->with('success', 'Payment Successful!');
            } catch (\Throwable $th) {
                throw $th;
                // return back()->with(['error' => 'Internal server error']);
            }
        }catch (\Throwable $th) {
            throw $th;
            // return back()->with(['error' => 'Internal server error']);
        }
    }
}
