<?php

namespace App\Http\Controllers;

use App\Mail\PlaceorderMailable;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gateway = new \Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey'),

        ]);

        $token = $gateway->ClientToken()->generate();

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('website.checkout', compact('cart_data','token'));
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

    private function update_user($user_id, Request $request)
    {

        $user = User::find($user_id);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');

        $user->phone = $request->input('mobile');
        $user->county = $request->input('county');

        $user->city = $request->input('city');
        $user->address = $request->input('address');

        return $user->save();

    }

    private function insert_orderitem($last_order_id)
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        $items_in_cart = $cart_data;

        foreach ($items_in_cart as $itemdata)
        {
            $products = Product::find($itemdata['item_id']);
            $price_value = $products->offer_price;
            $tax_amt = $products->tax_amt;
            Orderitem::create([
                'order_id'=> $last_order_id,
                'product_id' => $itemdata['item_id'],
                'price'=> $price_value,
                'tax_amt' => $tax_amt,
                'quantity' => $itemdata['item_quantity'],


            ]);
        }

    }

    private function placeorderMailable($request)
    {
         $order_data = [
             'firstname' => $request->input('firstname'),
             'lastname' => $request->input('lastname'),
             'mobile' => $request->input('mobile'),
             'city' => $request->input('city'),
             'county' => $request->input('county'),
             'address' => $request->input('address'),
             'email' => $request->input('email'),
             'trackingno' =>$request->Order->tracking_no, #$trackingno,
         ];

         $cookie_data = stripslashes(Cookie::get('shopping_cart'));
         $items_in_cart = json_decode($cookie_data, true);

         $to_customer_email = $request->input('email');
         Mail::to($to_customer_email)->send(new PlaceorderMailable($order_data, $items_in_cart)) ;
    }

    public function storeorder(Request $request)
    {
        /*
         * payment status
         * 0 = Nothing Paid
         * 1 = Cash Paid
         * 2 = Razorpay payment successful
         * 3 = Razorpay payment failed
         * 4 = Other forms of payment eg stripe,paypal
         */


        if (isset($_POST['place_order']))
        {
           //user data update
            $user_id = Auth::id();
            $this->update_user($user_id, $request);

            //placing order

            /*payment status =
            0 = pending
            1 = cash accepted
            2 = canceled
            3 = continue for online
             * */
            $order = new Order();

            $trackingno = rand(1111,9999);

            $order->user_id = $user_id;
            $order->tracking_no = 'newgreen'.$trackingno;
            $order->payment_mode = 'Cash on Delivery';
            $order->payment_status = '0';
            $order->order_status = '0';
            $order->notify = '0';

            $order->save();
            $trackingno = $order->tracking_no;

            $last_order_id = $order->id;

            //ordered -cart items
            $this->insert_orderitem($last_order_id);

            //Send Mail
            $this->placeorderMailable($request,$trackingno );

            Cookie::queue(Cookie::forget('shopping_cart'));
            return redirect('/thank-you')->with('status','Order has been placed successfully!');
        }

        if (isset($_POST['place_order_razorpay']))
        {
            $user_id = Auth::id();
            $this->update_user($user_id, $request);

            //placing order
            $trackno = rand(1111,9999);
            $order = new Order();
            $order->user_id = $user_id;
            $order->tracking_no = 'newgreen'.$trackno;
            $order->payment_mode = 'Payment by Razorpay';
            $order->payment_id = $request->input('razorpay_payment_id');
            $order->payment_status = '2';
            $order->order_status = '0';
            $order->notify = '0';

            $order->save();

            $last_order_id = $order->id;

            //ordered -cart items
            $this->insert_orderitem($last_order_id);

            //Send Mail
            $this->placeorderMailable($request,$trackno );

            Cookie::queue(Cookie::forget('shopping_cart'));
            //ordered -cart items
            $this->insert_orderitem($last_order_id);
        }

        if (isset($_POST['/braincheckout']))
        {
            $user_id = Auth::id();
            $this->update_user($user_id, $request);

            //placing order
            $trackno = rand(1111,9999);
            $order = new Order();
            $order->user_id = $user_id;
            $order->tracking_no = 'newgreen'.$trackno;
            $order->payment_mode = 'Payment by PayPal';
            #$order->payment_id = $request->input('razorpay_payment_id');
            $order->payment_status = '4';
            $order->order_status = '0';
            $order->notify = '0';

            $order->save();

            $last_order_id = $order->id;

            //ordered -cart items
            $this->insert_orderitem($last_order_id);

            //Send Mail
            $this->placeorderMailable($request,$trackno );

            Cookie::queue(Cookie::forget('shopping_cart'));
            //ordered -cart items
            $this->insert_orderitem($last_order_id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function thankyou()
    {
        return view('website.thankyou');
    }

    public function checkamount(Request $request)
    {
        if (Cookie::get('shopping_cart'))
        {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $items_in_cart = $cart_data;

            $total = "0";
            foreach($items_in_cart as $itemdata)
            {
                $products = Product::find($itemdata['item_id']);
                $price_value = $products->offer_price;
                $total = $total + ($itemdata["item_quantity"] * $price_value);
            }

            return response()->json([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'mobile' => $request->mobile,
                'county' => $request->county,
                'city' => $request->city,
                'address' => $request->address,
                'email' => Auth::user()->email,
                'total_price' => $total
            ]);
        }
        else
        {
            return response()->json([
                'status_code' => 'no_data_in_cart',
                'status' => 'Your cart is empty',
            ]);
        }
    }

    public function braintree()
    {
        $gateway = new \Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey'),

        ]);

        $token = $gateway->ClientToken()->generate();

        return view('website.checkoutbraintree', compact('token'));
    }
    public function brain(Request $request)
    {
        $gateway = new \Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey'),

        ]);

        $amount = $request['amount'];
        $nonce = $request['payment_method_nonce'];

        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        dd($request->input('amount'));
        if ($result->success) {
            $transaction = $result->transaction;
            return redirect('thank-you')->with('success_message', 'Transaction successful. The transaction id is: '.$transaction->id);
        } else {
//            $errorString = "";
//
//            foreach($result->errors->deepAll() as $error) {
//                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
//            }

//        $_SESSION["errors"] = $errorString;
//        header("Location: " . $baseUrl . "index.php");

            return back()->withErrors('An error occurred with the message: ' .$result->message);
        }



    }

}
