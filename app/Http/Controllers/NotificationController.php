<?php

namespace App\Http\Controllers;
use App\Models\Shop;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop=Shop::all();
        return view('admin.addNotification')->with('shop',$shop);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $notification=Notification::all();

        $notification = DB::table('notifications')
                    ->select('notifications.*', 'shops.shop_Id as shopID')
                    ->leftJoin("shops", "shops.id", "=", "notifications.shopNameId")
                    ->get();

        // dd($notification);

        return view('admin.viewNotification')->with('notification',$notification);
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
            'type' => 'required',
            'notification' => 'required'
            ]);
            
            

            if($request->type==1){

                $notification = new Notification;

                $notification->type = $request->type;
                $notification->notification = $request->notification;
                $notification->shopNameId =NULL;

                $notification->save();
    
                if($notification){
                    alert()->success('Notification Insert Successfull')->autoclose(3500);
                    return back();
                }else{
                    alert()->warning('Something went wrong.');
                }


            }else{

                $notification=new Notification;

                $notification->type = $request->type;
                $notification->shopNameId = $request->shopId;                
                $notification->notification = $request->notification;

                $notification->save();
    
                if($notification){
                    alert()->success('Notification Insert Successfull')->autoclose(3500);
                    return back();
                }else{
                    alert()->warning('Something went wrong.');
                }
            }       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Notification::find($id);
        $data->delete();
        if($data){
            alert()->success('Notification Delete Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
            return back();
        }
    }
}
