<?php

namespace App\Http\Controllers;



use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;
use Validator;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banneradd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Banner::all();
        return view('admin.bannerView')->with('banner',$data);
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

            $banner=New Banner;
            
            $startDate=date('Y-m-d',strtotime($request->startDate));
            $endDate=date('Y-m-d',strtotime($request->endDate));
            $category=$request->category;
            $file=$request->img;
            
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->img->move('image/banner',$filename);
            //  dd($filename);
            $banner->file=$filename;
            $banner->startDate=$startDate;
            $banner->endDate=$endDate;
            $banner->category=$category;

            $banner->save();
  
            if($banner){
                alert()->success('Banner Insert Successfull')->autoclose(3500);
                return back();
            }else{
                alert()->warning('Something went wrong.');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Banner::find($id);
        $data->delete();
        if($data){
            alert()->success('Banner Delete Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
            return back();
        }
    }

        // $banner = Banner::where('endDate', '<', Carbon::now()->subDays(15))->get();

        // foreach ($banner as $banner) {
        //     $banner->delete();
        // }
}
