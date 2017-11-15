<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use App\Order;
use App\OrderPayment;
class CheckOut extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('shopping.payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
          'payment_method'=>'required',
          'card_number'=>'required',
          'amount'=>'required',
        ]);
        foreach(Cart::content() as $cartitem){
          $orders= new Order();
          $payment= new OrderPayment();
          $orders->user_id=Auth::user()->id;
          $orders->product_id=$cartitem->id;
          $orders->quantity=$cartitem->qty;
          $orders->amount= $cartitem->price*$cartitem->qty;
          $orders->status=false;
          $orders->save();
          $payment->user_id=Auth::user()->id;
          $payment->order_id=$orders->id;
          $payment->card_type=$request->payment_method;
          $payment->card_no=$request->card_number;
          $payment->amount=$cartitem->price*$cartitem->qty;
          $payment->status=false;
          $payment->save();
        }
        Cart::destroy();
        return redirect('/');
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

    function payment()
    {
      echo "hi";
    }
}
