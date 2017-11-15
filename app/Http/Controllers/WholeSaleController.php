<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WholeSale;
class WholeSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.wholesale');
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
        $wholesale= new WholeSale();
        $this->validate($request,[
          'no_of_items'=>'required',
          'price'=>'required',
          'description'=>'required',
          'quantity'=>'required',
          'product_id'=>'required',
        ]);
        $wholesale->itemsperpackage=$request->no_of_items;
        $wholesale->wholesaleprice=$request->price;
        $wholesale->description=$request->description;
        $wholesale->quantity_available=$request->quantity;
        $wholesale->product_id=$request->product_id;
        $wholesale->status=false;
        $wholesale->save();
        return redirect('products/')->with(['message'=>'Successful']);
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
}
