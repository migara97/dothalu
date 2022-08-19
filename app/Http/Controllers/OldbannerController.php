<?php

namespace App\Http\Controllers;

use App\Models\Oldbanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;
use Validator;

class OldbannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.oldbannerAdd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Oldbanner::all();
        return view('admin.oldbannerView')->with('banner',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate($request,[
            'startDate' => 'required',
            'endDate' => 'required',
            'category' => 'required',
            'img' => 'required'
            ]);

            $oldbanner=New Oldbanner;
            
            $startDate=date('Y-m-d',strtotime($request->startDate));
            $endDate=date('Y-m-d',strtotime($request->endDate));
            $category=$request->category;
            $file=$request->img;
            
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->img->move('image/oldbanner',$filename);
            //  dd($filename);
            $oldbanner->file=$filename;
            $oldbanner->startDate=$startDate;
            $oldbanner->endDate=$endDate;
            $oldbanner->category=$category;

            $oldbanner->save();
  
            if($oldbanner){
                alert()->success('Banner Insert Successfull')->autoclose(3500);
                return back();
            }else{
                alert()->warning('Something went wrong.');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oldbanner  $oldbanner
     * @return \Illuminate\Http\Response
     */
    public function show(Oldbanner $oldbanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Oldbanner  $oldbanner
     * @return \Illuminate\Http\Response
     */
    public function edit(Oldbanner $oldbanner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oldbanner  $oldbanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oldbanner $oldbanner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oldbanner  $oldbanner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Oldbanner::find($id);
        $data->delete();
        if($data){
            alert()->success('Banner Delete Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
            return back();
        }
    }
}
