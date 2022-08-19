<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Shoptime;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;
use Validator;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::where('group', '=', 'Editor')->get();
        return view('admin.shopAdd')->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shop=Shop::all();
        return view('admin.shopView')->with('shop',$shop);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request);

        $this->validate($request,[
            'user_id' => 'required',
            'shopID' => 'required',
            'shopName' => 'required',
            'shopType' => 'required',
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
            'country' => 'required',
            'pNumber1' => 'required',
            'pNumber2' => 'required',
            'wNumber' => 'required',
            'about' => 'required',
            'logo' => 'required',
            'banner' => 'required',
            // 'sun1' => 'required',
            // 'sun2' => 'required',
            // 'mon1' => 'required',
            // 'mon2' => 'required',
            // 'tue1' => 'required',
            // 'tue2' => 'required',
            // 'wen1' => 'required',
            // 'wen2' => 'required',
            // 'thu1' => 'required',
            // 'thu2' => 'required',
            // 'fri1' => 'required',
            // 'fri2' => 'required',
            // 'sat1' => 'required',
            // 'sat2' => 'required',
           
       ]);

        




       $logo=$request->logo;

       $filename1=rand(111111, 999999).'.'.$logo->getClientOriginalExtension();
            $request->logo->move('image/shop',$filename1);

        $banner=$request->banner;

        $filename2=rand(111111, 999999).'.'.$banner->getClientOriginalExtension();
            $request->banner->move('image/shop',$filename2);  
            
        $banner2=$request->banner2;

        $filename3=rand(111111, 999999).'.'.$banner2->getClientOriginalExtension();
            $request->banner2->move('image/shop',$filename3); 

        $banner3=$request->banner3;

        $filename4=rand(111111, 999999).'.'.$banner3->getClientOriginalExtension();
            $request->banner3->move('image/shop',$filename4); 
        
        //dd($filename2);    
        






        $shop =New Shop;     
        $shop->shop_Id=$request->shopID;
        $shop->shopName=$request->shopName;
        $shop->shopType=$request->shopType;
        $shop->street=$request->street;
        $shop->city=$request->city;
        $shop->province=$request->province;
        $shop->country=$request->country;
        $shop->pNumber1=$request->pNumber1;
        $shop->pNumber2=$request->pNumber2;
        $shop->wNumber=$request->wNumber;
        $shop->about=$request->about;
        $shop->logo=$filename1;
        $shop->banner=$filename2;
        $shop->banner2=$filename3;
        $shop->banner3=$filename4;
        $shop->user_id=$request->user_id;
        
        $shop->save();


        $sun1=$request->sun1;
        $sun2=$request->sun2;
        $mon1=$request->mon1;
        $mon2=$request->mon2;
        $tue1=$request->tue1;
        $tue2=$request->tue2;
        $wen1=$request->wen1;
        $wen2=$request->wen2;
        $thu1=$request->thu1;
        $thu2=$request->thu2;
        $fri1=$request->fri1;
        $fri2=$request->fri2;
        $sat1=$request->sat1;
        $sat2=$request->sat2;

        
        
        
        $sun="$sun1-$sun2";
        $mon="$mon1-$mon2";
        $tue="$tue1-$tue2";
        $wen="$wen1-$wen2";
        $thu="$thu1-$thu2";
        $fri="$fri1-$fri2";
        $sat="$sat1-$sat2";

        $shoptime =New Shoptime;
        $shoptime->user_id=$request->user_id;
        $shoptime->sun=$sun;
        $shoptime->mon=$mon;
        $shoptime->tue=$tue;
        $shoptime->wen=$wen;
        $shoptime->thu=$thu;
        $shoptime->fri=$fri;
        $shoptime->sat=$sat;

        $shoptime->save();

      

  
        if($shop){
            alert()->success('shop Data Insert Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        //$data=Shop::find($id);
        $shop=Shop::where('user_id',$user_id)->first();
        $shoptime=Shoptime::where('user_id',$user_id)->first();
        //  dd($shoptime);

        // return view('admin.shopUpdate')->with('shop',$data);

        return view('admin.shopUpdate',compact('shop'),compact('shoptime'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$user_id)
    {
        // dd($request);
        $logo=$request->logo;
        $banner=$request->banner;
        $banner2=$request->banner2;
        $banner3=$request->banner3;

        //dd($logo);

        if( $request->hasFile( 'logo' ) ){
            $filename1=rand(111111, 999999).'.'.$logo->getClientOriginalExtension();
            $request->logo->move('image/shop',$filename1);
        }
        if($request->hasFile( 'banner' ) ){
            $filename2=rand(111111, 999999).'.'.$banner->getClientOriginalExtension();
             $request->banner->move('image/shop',$filename2);
        }

        if($request->hasFile( 'banner2' ) ){
            $filename3=rand(111111, 999999).'.'.$banner2->getClientOriginalExtension();
             $request->banner2->move('image/shop',$filename3);
        }

        if($request->hasFile( 'banner3' ) ){
            $filename4=rand(111111, 999999).'.'.$banner3->getClientOriginalExtension();
             $request->banner3->move('image/shop',$filename4);
        }
        

        $id=$request->id;
        
        $shopName=$request->shopName;
        $shopType=$request->shopType;
        $street=$request->street;
        $city=$request->city;
        $province=$request->province;
        $country=$request->country;
        $pNumber1=$request->pNumber1;
        $pNumber2=$request->pNumber2;
        $wNumber=$request->wNumber;
        $about=$request->about;
        $active=$request->active;



        $sun1=$request->sun1;
        $sun2=$request->sun2;
        $mon1=$request->mon1;
        $mon2=$request->mon2;
        $tue1=$request->tue1;
        $tue2=$request->tue2;
        $wen1=$request->wen1;
        $wen2=$request->wen2;
        $thu1=$request->thu1;
        $thu2=$request->thu2;
        $fri1=$request->fri1;
        $fri2=$request->fri2;
        $sat1=$request->sat1;
        $sat2=$request->sat2;

        
        
        
        $sun="$sun1-$sun2";
        $mon="$mon1-$mon2";
        $tue="$tue1-$tue2";
        $wen="$wen1-$wen2";
        $thu="$thu1-$thu2";
        $fri="$fri1-$fri2";
        $sat="$sat1-$sat2";

        $shoptime=Shoptime::where('user_id',$user_id)->first();
        

        if($sun==NULL){
                
        }else{
            $shoptime->sun=$sun;
        }
        if($mon==NULL){
            
        }else{
            $shoptime->mon=$mon;
        }
        if($tue==NULL){
            
        }else{
            $shoptime->tue=$tue;
        }
        if($wen==NULL){
            
        }else{
            $shoptime->wen=$wen;
        }
        if($thu==NULL){
            
        }else{
            $shoptime->thu=$thu;
        }
        if($fri==NULL){
            
        }else{
            $shoptime->fri=$fri;
        }
        if($sat==NULL){
            
        }else{
            $shoptime->sat=$sat;
        }

        $shoptime->save();


        

        
        //$data=Shop::find($id);
        $data=Shop::where('user_id',$user_id)->first();
        //dd($data);

        if($active==null){
            // dd("this");
            $active=0;

            
            $data->shopName=$shopName;
            $data->shopType=$shopType;
            $data->street=$street;
            $data->city=$city;
            $data->province=$province;
            $data->country=$country;
            $data->pNumber1=$pNumber1;
            $data->pNumber2=$pNumber2;
            $data->wNumber=$wNumber;
            $data->about=$about;

            if($request->logo==NULL){
                
            }else{
                $data->logo=$filename1;
            }
            if($request->banner==NULL){
                
            }else{
                $data->banner=$filename2;
            }
            if($request->banner2==NULL){
                
            }else{
                $data->banner2=$filename3;
            }
            if($request->banner3==NULL){
                
            }else{
                $data->banner3=$filename4;
            }
            
            
            $data->status=$active;
            

            $data->save();

            if($data){
                alert()->success('Shop Update Successfull')->autoclose(3500);
                return redirect('/shopView');
               //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }

        }else{
         

            
            $data->shopName=$shopName;
            $data->shopType=$shopType;
            $data->street=$street;
            $data->city=$city;
            $data->province=$province;
            $data->country=$country;
            $data->pNumber1=$pNumber1;
            $data->pNumber2=$pNumber2;
            $data->wNumber=$wNumber;
            $data->about=$about;
            if($request->logo==NULL){
                
            }else{
                $data->logo=$filename1;
            }
            if($request->banner==NULL){
                
            }else{
                $data->banner=$filename2;
            }
            if($request->banner2==NULL){
                
            }else{
                $data->banner2=$filename3;
            }
            if($request->banner3==NULL){
                
            }else{
                $data->banner3=$filename4;
            }
            $data->status=$active;
        

        $data->save();

        if($data){
            alert()->success('Shop Update Successfull')->autoclose(3500);
            return redirect('/shopView');
           //  return back();
        }else{
            alert()->warning('Something went wrong.');
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
       
        $shoptime=Shoptime::where('user_id',$user_id)->delete();
        //dd($shoptime);

        //$shoptime->delete();
        $data=Shop::where('user_id',$user_id)->delete();

        // $data=Shop::find($id);
        // $data->delete();
        if($data){
            alert()->success('Shop Delete Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
            return back();
        }
    }
}
