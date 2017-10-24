<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;
use Illuminate\Support\Facades\Auth;
use app\Package;
class Adverts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$adverts= Promotion::where('user_id','=',Auth::user()->id);
        $adverts=Promotion::where('user_id','=',Auth::user()->id)->paginate();
        return view('adverts.index',compact('adverts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adverts.create');
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
        $promotions= new Promotion();
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'starting'=>'required',
            'ending'=>'required',
            'icon'=>'required',
        ]);
        if($file=$request->hasFile('icon')){
            $file = $request->file('icon') ;
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path().'/images/advertimages/' ;
            $file->move($destinationPath,$fileName);
        }
        $promotions->user_id=Auth::user()->id;
        $promotions->name=$request->name;
        $promotions->description=$request->description;
        $promotions->logo=$fileName;
        $promotions->status=false;
        $promotions->start_date=$request->starting;
        $promotions->end_date=$request->ending;
        $promotions->save();
        return redirect('adverts/');
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
