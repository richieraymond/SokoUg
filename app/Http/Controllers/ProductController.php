<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Category;
use Carbon\Carbon;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::where('user_id','=',Auth::user()->id)->paginate(20);
      return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $category= category::pluck('name','id');
      return view('products.create',compact('category'));
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
        $products = new Product();
        $this->validate($request,[
            'name'=>'required',
            'category'=>'required',
            'subcategory'=>'required',
            'description'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'icon'=>'required',
        ]);
        if($file=$request->hasFile('icon')){
            $file = $request->file('icon') ;
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path().'/images/productimages/' ;
            $file->move($destinationPath,$fileName);
        }
        $products->subcategory_id=$request->subcategory;
        $products->user_id=Auth::user()->id;
        $products->name=$request->name;
        $products->price=$request->price;
        $products->description=$request->description;
        $products->qauntity=$request->quantity;
        $products->status=false;
        $products->image=$fileName;
        $products->slug=Auth::user()->id.$request->quantity.Carbon::now()->timestamp;
        $products->save();
        return redirect('products/');

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
        $product = Product::find($id);
        return view('products.edit',compact('product'));
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
