<?php

namespace App\Http\Controllers;

use App\Models\Requsetshop;
use Illuminate\Http\Request;

class RequsetshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requsetshop = Requsetshop::all();
        return view('admin.shoprequestView')->with('requsetshop',$requsetshop);
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
        // dd($request);
        $this->validate($request,[
            'semail' => 'required',
            'Number' => 'required',
            ]);

        $Requsetshop=New Requsetshop;
        
        $id = $request->id;
        $email = $request->email;
        $semail = $request->semail;
        $Number = $request->Number;
        $wNumber = $request->wNumber;
        $address = $request->address;

        $Requsetshop->userID=$id;
        $Requsetshop->userEmail=$email;
        $Requsetshop->semail=$semail;
        $Requsetshop->Number=$Number;
        $Requsetshop->wNumber=$wNumber;
        $Requsetshop->address=$address;


        $Requsetshop->save();
  
        if($Requsetshop){
            alert()->success('Your Shop Request Successfull ...................................')->autoclose(4500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requsetshop  $requsetshop
     * @return \Illuminate\Http\Response
     */
    public function show(Requsetshop $requsetshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requsetshop  $requsetshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Requsetshop $requsetshop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requsetshop  $requsetshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requsetshop $requsetshop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requsetshop  $requsetshop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Requsetshop::find($id);
        $data->delete();
        if($data){
            alert()->success('Shop Request Delete Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
            return back();
        }
    }
}
