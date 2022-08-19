<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\District;
use App\Models\Subcategorylevel;
use App\Models\Favorite;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class WebController extends Controller
{
    public function shop()
    {

        $data=Ad::query();

        if(!empty($_GET['condition'])){
            $condi=explode(',',$_GET['condition']);
            $con_id = ad::select('*')->whereIn('condition',$condi)->where('category', '=', 1)->pluck('id')->toArray();
            $data = $data->whereIn('id',$con_id);
            // dd($data);
        }
        if(!empty($_GET['vehicle'])){
            $vehi=explode(',',$_GET['vehicle']);
            $vehi_id = ad::select('*')->whereIn('subcategory',$vehi)->where('category', '=', 1)->pluck('id')->toArray();
            $data = $data->whereIn('id',$vehi_id);
        }
        if(!empty($_GET['vehicleModel'])){    
            $vehiMod=explode(',',$_GET['vehicleModel']);
            $vehiMod_id = ad::select('*')->whereIn('subcategorylevel',$vehiMod)->where('category', '=', 1)->pluck('id')->toArray();
            $data = $data->whereIn('id',$vehiMod_id);  
        }
        if(!empty($_GET['bodyType'])){    
            $bodyType=explode(',',$_GET['bodyType']);
            $bodyType_id = ad::select('*')->whereIn('bodyType',$bodyType)->where('category', '=', 1)->pluck('id')->toArray();
            //dd($bodyType_id);
            $data = $data->whereIn('id',$bodyType_id);  
        }
        if(!empty($_GET['location'])){    
            $location=explode(',',$_GET['location']);
            $location_id = ad::select('*')->whereIn('district',$location)->where('category', '=', 1)->pluck('id')->toArray();
            //dd($bodyType_id);
            $data = $data->whereIn('id',$location_id);  
        }
        if(!empty($_GET['chassisCode'])){    
            $chassisCode=explode(',',$_GET['chassisCode']);
            $chassisCode_id = ad::select('*')->whereIn('chassisCode',$chassisCode)->where('category', '=', 1)->pluck('id')->toArray();
            $data = $data->whereIn('id',$chassisCode_id);  
        }

        if(!empty($_GET['partNumber'])){    
            $partNumber=explode(',',$_GET['partNumber']);
            $partNumber_id = ad::select('*')->whereIn('partNumber',$partNumber)->where('category', '=', 1)->pluck('id')->toArray();
            $data = $data->whereIn('id',$partNumber_id);  
        }

        if(!empty($_GET['from'])){
            $from=explode(',',$_GET['from']);
            $to=explode(',',$_GET['to']);
            $year_id = ad::select('*')->whereBetween('year',[$from,$to])->where('category', '=', 1)->pluck('id')->toArray();
            //  dd($MiddelPrice_id);
            $data = $data->whereIn('id',$year_id);
            // dd($data);
        }



        if(!empty($_GET['LowPrice'])){
            $LowPrice=explode(',',$_GET['LowPrice']);
            $LowPrice_id = ad::select('*')->where('price','<=',$LowPrice)->where('category', '=', 1)->pluck('id')->toArray();
            // dd($LowPrice_id);
            $data = $data->whereIn('id',$LowPrice_id);
            // dd($data);
        }

        if(!empty($_GET['MiddelPrice'])){
            $MiddelPrice=explode(',',$_GET['MiddelPrice']);
            $MiddelPrice_id = ad::select('*')->whereBetween('price',['10000',$MiddelPrice])->where('category', '=', 1)->pluck('id')->toArray();
            //  dd($MiddelPrice_id);
            $data = $data->whereIn('id',$MiddelPrice_id);
            // dd($data);
        }

        if(!empty($_GET['Min'])){
            $MinPrice=explode(',',$_GET['Min']);
            $MaxPrice=explode(',',$_GET['Max']);
            $Price_id = ad::select('*')->whereBetween('price',[$MinPrice,$MaxPrice])->where('category', '=', 1)->pluck('id')->toArray();
            //  dd($MiddelPrice_id);
            $data = $data->whereIn('id',$Price_id);
            // dd($data);
        }


        if(!empty($_GET['accessoryType'])){    
            $accessoryType=explode(',',$_GET['accessoryType']);
            $accessoryType_id = ad::select('*')->whereIn('accessoryType',$accessoryType)->where('category', '=', 1)->pluck('id')->toArray();
            //dd($accessoryType_id);
            $data = $data->whereIn('id',$accessoryType_id);  
        }

        if(!empty($_GET['fullsearch'])){    
            $fullsearch=explode(',',$_GET['fullsearch']);
            $fullsearch_id = ad::select('*')->where('title','LIKE',$fullsearch)->where('category', '=', 1)->pluck('id')->toArray();
            // dd($fullsearch_id);
            $data = $data->whereIn('id',$fullsearch_id);  
        }



        if(!empty($_GET['sortBy'])){
            
            // dd($_GET['sortBy']);
            if($_GET['sortBy']=='Sort by newness'){
                $data = $data->where('category', '=', 1)->orderBy('id','ASC')->paginate(12);
                // dd($data);
            }
            if($_GET['sortBy']=='priceAsc'){
                $data = $data->where('category', '=', 1)->orderBy('price','ASC')->paginate(12);
                //  dd($data);
            }
            if($_GET['sortBy']=='priceDesc'){
                $data=$data->where('category', '=', 1)->orderBy('price', 'DESC')->paginate(12);
                // dd($data);
            }
        }
        
        
        
        
        else{
            $data = $data
                    ->where('category', '=', 1)
                    ->paginate(12);

        }
        
        // $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        // if(request()->has('condition')){
        //     $sub=Subcategory::where('categoryID', '=', 1)->get();
        //     $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        //     $data=ad::select('*')->where('condition',request('condition'))->where('category', '=', 1)->Paginate(9)->appends('condition',request('condition'));
        //     // dd($data);
        //     return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev);
        // }
        // $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();
        $topad= DB::table('ads')
                ->select('ads.*')
                ->where('category', '=', 1)
                ->where('status', '=', 1)
                ->get();
        // dd($topad);

        if(Auth::check()){
            $favorite = DB::table('ads')
                        ->select('ads.*','favorites.*','users.name as name','users.group as group')
                        ->leftJoin('users', 'ads.user_id', '=', 'users.id')
                        ->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')
                        ->where('favorites.femail','=', Auth::user()->name)
                        ->get();


                        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
            }

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad);
    }





    public function vehicle()
    {   
        // $ad=Ad::where('category', '=', 2)->paginate(9);
        $data=Ad::query();

        if(!empty($_GET['condition'])){
            $condi=explode(',',$_GET['condition']);
            $con_id = ad::select('*')->whereIn('condition',$condi)->where('category', '=', 2)->pluck('id')->toArray();
            $data = $data->whereIn('id',$con_id);
            // dd($con_id);
        }

        if(!empty($_GET['vehicle'])){
            $vehi=explode(',',$_GET['vehicle']);
            $vehi_id = ad::select('*')->whereIn('subcategory',$vehi)->where('category', '=', 2)->pluck('id')->toArray();
            $data = $data->whereIn('id',$vehi_id);
            // dd($data);
        }

        if(!empty($_GET['vehicleModel'])){    
            $vehiMod=explode(',',$_GET['vehicleModel']);
            $vehiMod_id = ad::select('*')->whereIn('subcategorylevel',$vehiMod)->where('category', '=', 2)->pluck('id')->toArray();
            $data = $data->whereIn('id',$vehiMod_id);  
        }

        if(!empty($_GET['location'])){    
            $location=explode(',',$_GET['location']);
            $location_id = ad::select('*')->whereIn('district',$location)->where('category', '=', 2)->pluck('id')->toArray();
            //dd($bodyType_id);
            $data = $data->whereIn('id',$location_id);  
        }

        if(!empty($_GET['bodyType'])){    
            $bodyType=explode(',',$_GET['bodyType']);
            $bodyType_id = ad::select('*')->whereIn('bodyType',$bodyType)->where('category', '=', 2)->pluck('id')->toArray();
            //dd($bodyType_id);
            $data = $data->whereIn('id',$bodyType_id);  
        }

        if(!empty($_GET['EngineCapacity'])){    
            $EngineCapacity=explode(',',$_GET['EngineCapacity']);
            $EngineCapacity_id = ad::select('*')->whereIn('EngineCapacity',$EngineCapacity)->where('category', '=', 2)->pluck('id')->toArray();
            $data = $data->whereIn('id',$EngineCapacity_id);  
        }

        if(!empty($_GET['from'])){
            $from=explode(',',$_GET['from']);
            $to=explode(',',$_GET['to']);
            $year_id = ad::select('*')->whereBetween('myear',[$from,$to])->where('category', '=', 2)->pluck('id')->toArray();
            //  dd($MiddelPrice_id);
            $data = $data->whereIn('id',$year_id);
            // dd($data);
        }

        if(!empty($_GET['fuelType'])){    
            $fuelType=explode(',',$_GET['fuelType']);
            $fuelType_id = ad::select('*')->whereIn('fuelType',$fuelType)->where('category', '=', 2)->pluck('id')->toArray();
            $data = $data->whereIn('id',$fuelType_id);  
        }


        if(!empty($_GET['transmission'])){    
            $transmission=explode(',',$_GET['transmission']);
            $transmission_id = ad::select('*')->whereIn('transmission',$transmission)->where('category', '=', 2)->pluck('id')->toArray();
            $data = $data->whereIn('id',$transmission_id);  
        }

        if(!empty($_GET['LowPrice'])){
            $LowPrice=explode(',',$_GET['LowPrice']);
            $LowPrice_id = ad::select('*')->where('price','<=',$LowPrice)->where('category', '=', 2)->pluck('id')->toArray();
            // dd($LowPrice_id);
            $data = $data->whereIn('id',$LowPrice_id);
            // dd($data);
        }


        if(!empty($_GET['MiddelPrice'])){
            $MiddelPrice=explode(',',$_GET['MiddelPrice']);
            $MiddelPrice_id = ad::select('*')->whereBetween('price',['10000',$MiddelPrice])->where('category', '=', 2)->pluck('id')->toArray();
            //  dd($MiddelPrice_id);
            $data = $data->whereIn('id',$MiddelPrice_id);
            // dd($data);
        }
        if(!empty($_GET['Min'])){
            $MinPrice=explode(',',$_GET['Min']);
            $MaxPrice=explode(',',$_GET['Max']);
            $Price_id = ad::select('*')->whereBetween('price',[$MinPrice,$MaxPrice])->where('category', '=', 2)->pluck('id')->toArray();
            //  dd($MiddelPrice_id);
            $data = $data->whereIn('id',$Price_id);
            // dd($data);
        }

        if(!empty($_GET['vehiclefullsearch'])){    
            $vehiclefullsearch=explode(',',$_GET['vehiclefullsearch']);
            $vehiclefullsearch_id = ad::select('*')->where('title','LIKE',$vehiclefullsearch)->where('category', '=', 2)->pluck('id')->toArray();
            // dd($vehiclefullsearch_id);
            $data = $data->whereIn('id',$vehiclefullsearch_id);  
        }
        


        if(!empty($_GET['sortBy'])){
            // dd($_GET['sortBy']);
            if($_GET['sortBy']=='Sort by newness'){
                $data = $data->where('category', '=', 2)->orderBy('id','ASC')->paginate(12);
            }
            if($_GET['sortBy']=='priceAsc'){
                $data = $data->where('category', '=', 2)->orderBy('price','ASC')->paginate(12);
                //  dd($data);
            }
            if($_GET['sortBy']=='priceDesc'){
                $data=$data->where('category', '=', 2)->orderBy('price', 'DESC')->paginate(12);
                // dd($data);
            }
        }



        else{
            $data=  $data
                    ->where('category', '=', 2)
                    ->paginate(12);
        }

        $sub=Subcategory::where('categoryID', '=', 2)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 2)->get();
        $location=District::all();

        // $topad=Ad::where('category', '=', 2)->where('status', '=', 1)->get();
        // dd($topad);
        $topad= DB::table('ads')
                ->select('ads.*')
                ->where('category', '=', 2)
                ->where('status', '=', 1)
                ->get();

        if(Auth::check()){
            $favorite = DB::table('ads')
                        ->select('ads.*','favorites.*','users.name as name','users.group as group')
                        ->leftJoin('users', 'ads.user_id', '=', 'users.id')
                        ->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')
                        ->where('favorites.femail','=', Auth::user()->name)
                        ->get();


                        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
            }
        
        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad);
    }




    public function product($id)
    {
        // $products=Ad::find($id);
        // dd($accessoryType);

        $products = DB::table('ads')
                    ->select('ads.*', 'subcategories.title as subtitile', 'subcategorylevels.title as sublevtitle','shops.shopName as shopName','shops.logo as logo','shops.id as spID','users.name as name','users.group as group')
                    ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                    ->leftJoin("subcategorylevels", "subcategorylevels.id", "=", "ads.subcategorylevel")
                    ->leftJoin('users', 'ads.user_id', '=', 'users.id')
                    ->leftJoin('shops', 'ads.user_id', '=', 'shops.user_id')
                    ->where('ads.id','=', $id)
                    ->get();

        foreach ($products as $product) {
            $accessoryType = $product->accessoryType;
            // dd($accessoryType);

            $sameproducts = DB::table('ads')
                        ->select('ads.*')
                        ->where('category', '=', 1)
                        ->where('accessoryType', '=', $accessoryType)
                        ->orderBy('id', 'desc')
                        ->take(3)
                        ->get();

            // dd($sameproducts);
        }
        
        
        

        
        
        if(Auth::check()){
        $favorite = DB::table('ads')
                    ->select('ads.*','favorites.*','users.name as name','users.group as group')
                    ->leftJoin('users', 'ads.user_id', '=', 'users.id')
                    ->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')
                    ->where('favorites.femail','=', Auth::user()->name)
                    ->where('ads.id','=', $id)
                    ->get();

                    return view('web/product',compact('products'))->with('favorite',$favorite)->with('sameproducts',$sameproducts);
                }
        //   dd($favorite);
        //  return $products;
        return view('web/product',compact('products'))->with('sameproducts',$sameproducts);
    }
    public function contact(){
        return view('web/contact');
    }
    public function about(){
        return view('web/about');
    }
    public function index(){
        return view('web/index');
    }
    public function register(){
        return view('web/login');
    }
    
    public function myAccount(){
        if(Auth::check()){
            $data=Ad::where('user_id', '=', Auth::user()->id)->where('category', '=', 1)->paginate(20);

            $vehicle=Ad::where('user_id', '=', Auth::user()->id)->where('category', '=', 2)->paginate(20);

            $wishlist=  DB::table('ads')
                        ->select('ads.*','favorites.fid as fid','favorites.femail as femail','favorites.fadId as fadId')
                        ->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')
                        ->where('favorites.femail', '=', Auth::user()->name)
                        ->paginate(20);
            
        // dd($wishlist);
        return view('web/myAccount')->with('data',$data)->with('vehicle',$vehicle)->with('wishlist',$wishlist);
        }
        
        return redirect("/");
        alert()->warning('You are not allowed to access');
    }
    public function logout(){
        Auth::logout();
       // $request->session()->invalidate();    
       // $request->session()->regenerateToken();    
       return redirect("/");
    }


    public function shopfilter(Request $request){

        // dd($request->accessoryType);
        //condition filter  
        $data =$request->all();
        // dd($data);
        $conUrl="";

        if(!empty($data['condition'])){
            foreach ($data['condition'] as $condition) {
                if(empty($conUrl)){
                    $conUrl .= '&condition='.$condition;
                }
                else
                {
                    $conUrl.= ','.$condition;
                }
            }
        }

        //sort filter
        $sortByUrl="";

        if(!empty($data['sortBy'])){
            $sortByUrl.='&sortBy='.$data['sortBy'];
        }

        //vehicle filter
        $vehicleUrl="";

        if(!empty($data['vehicle'])){
            foreach ($data['vehicle'] as $vehicle) {
                if(empty($vehicleUrl)){
                    $vehicleUrl .= '&vehicle='.$vehicle;
                }
                else
                {
                    $vehicleUrl.= ','.$vehicle;
                }
            }
        }

        //vehiclemodel filter
        $vehicleModelUrl="";

        if(!empty($data['vehicleModel'])){
            foreach ($data['vehicleModel'] as $vehicleModel) {
                if(empty($vehicleModelUrl)){
                    $vehicleModelUrl .= '&vehicleModel='.$vehicleModel;
                }
                else
                {
                    $vehicleModelUrl.= ','.$vehicleModel;
                }
            }
        }

        //bodyType filter
        $bodyTypeUrl="";

        if(!empty($data['bodyType'])){
            foreach ($data['bodyType'] as $bodyType) {
                if(empty($bodyTypeUrl)){
                    $bodyTypeUrl .= '&bodyType='.$bodyType;
                }
                else
                {
                    $bodyTypeUrl.= ','.$bodyType;
                }
            }
        }


        //location filter
        $locationUrl="";

        if(!empty($data['location'])){
            foreach ($data['location'] as $location) {
                if(empty($locationUrl)){
                    $locationUrl .= '&location='.$location;
                }
                else
                {
                    $locationUrl.= ','.$location;
                }
            }
        }


        //LowPrice filter
        $LowPriceUrl="";

        if(!empty($data['LowPrice'])){
            // dd($data['LowPrice']);
            $LowPriceUrl.='&LowPrice='.$data['LowPrice'];
        }

        //MiddelPrice filter
        $MiddelPriceUrl="";

        if(!empty($data['MiddelPrice'])){
            // dd($data['MiddelPrice']);
            $MiddelPriceUrl.='&MiddelPrice='.$data['MiddelPrice'];
        }

        //Min Max  filter
        $MinmaxUrl="";

        if(!empty($data['Min'] && $data['Max'])){
            // dd($data['Min'],$data['Max']);
            $MinmaxUrl.='&Min='.$data['Min'];
            $MinmaxUrl.='&Max='.$data['Max'];
        }

        //chassisCode  filter
        $chassisCodeUrl="";

        if(!empty($data['chassisCode'])){
            // dd($data['chassisCode']);
            $chassisCodeUrl.='&chassisCode='.$data['chassisCode'];
        }

        //partNumber  filter
        $partNumberUrl="";

        if(!empty($data['partNumber'])){
            // dd($data['partNumber']);
            $partNumberUrl.='&partNumber='.$data['partNumber'];
        }


        //accessoryType filter
        $accessoryTypeUrl="";

        // if(!empty($data['accessoryType'])){
        //     // dd($data['accessoryType']);
        //     foreach ($data['accessoryType'] as $accessoryType) {
        //         if(empty($accessoryTypeUrl)){
        //             $accessoryTypeUrl .= '&accessoryType='.$accessoryType;
        //         }
        //         else
        //         {
        //             $accessoryTypeUrl.= ','.$accessoryType;
        //         }
        //     }
        // }

        if(!empty($data['accessoryType'])){
            // dd($data['partNumber']);
            $accessoryTypeUrl.='&accessoryType='.$data['accessoryType'];
        }


        //year  filter
        $yearUrl="";

        if(!empty($data['from'] && $data['to'])){
            // dd($data['from']);
            $yearUrl.='&from='.$data['from'];
            $yearUrl.='&to='.$data['to'];

        }

        return redirect()->route('shop',$conUrl.$sortByUrl.$vehicleUrl.$vehicleModelUrl.$bodyTypeUrl.$locationUrl.$LowPriceUrl.$MiddelPriceUrl.$MinmaxUrl. $chassisCodeUrl.$partNumberUrl.$accessoryTypeUrl.$yearUrl);
    }

    

    public function vehiclefilter(Request $request){
        //condition filter  
        $data =$request->all();
        // dd($data);
        $conUrl="";

        if(!empty($data['condition'])){
            foreach ($data['condition'] as $condition) {
                if(empty($conUrl)){
                    $conUrl .= '&condition='.$condition;
                }
                else
                {
                    $conUrl.= ','.$condition;
                }
            }
        }

        //sort filter
        $sortByUrl="";

        if(!empty($data['sortBy'])){
            $sortByUrl.='&sortBy='.$data['sortBy'];
        }
        
        //vehicle filter
        $vehicleUrl="";

        if(!empty($data['vehicle'])){
            foreach ($data['vehicle'] as $vehicle) {
                if(empty($vehicleUrl)){
                    $vehicleUrl .= '&vehicle='.$vehicle;
                }
                else
                {
                    $vehicleUrl.= ','.$vehicle;
                }
            }
        }

        //vehiclemodel filter
        $vehicleModelUrl="";

        if(!empty($data['vehicleModel'])){
            foreach ($data['vehicleModel'] as $vehicleModel) {
                if(empty($vehicleModelUrl)){
                    $vehicleModelUrl .= '&vehicleModel='.$vehicleModel;
                }
                else
                {
                    $vehicleModelUrl.= ','.$vehicleModel;
                }
            }
        }

        //bodyType filter
        $bodyTypeUrl="";

        if(!empty($data['bodyType'])){
            foreach ($data['bodyType'] as $bodyType) {
                if(empty($bodyTypeUrl)){
                    $bodyTypeUrl .= '&bodyType='.$bodyType;
                }
                else
                {
                    $bodyTypeUrl.= ','.$bodyType;
                }
            }
        }

        //EngineCapacity  filter
        $EngineCapacityUrl="";

        if(!empty($data['EngineCapacity'])){
            // dd($data['chassisCode']);
            $EngineCapacityUrl.='&EngineCapacity='.$data['EngineCapacity'];
        }


        //location filter
        $locationUrl="";

        if(!empty($data['location'])){
            foreach ($data['location'] as $location) {
                if(empty($locationUrl)){
                    $locationUrl .= '&location='.$location;
                }
                else
                {
                    $locationUrl.= ','.$location;
                }
            }
        }


        //year  filter
        $yearUrl="";

        if(!empty($data['from'] && $data['to'])){
            // dd($data['from']);
            $yearUrl.='&from='.$data['from'];
            $yearUrl.='&to='.$data['to'];

        }

        //fuelType filter
        $fuelTypeUrl="";

        if(!empty($data['fuelType'])){
            foreach ($data['fuelType'] as $fuelType) {
                if(empty($fuelTypeUrl)){
                    $fuelTypeUrl .= '&fuelType='.$fuelType;
                }
                else
                {
                    $fuelTypeUrl.= ','.$fuelType;
                }
            }
        }



        //transmission filter
        $transmissionUrl="";

        if(!empty($data['transmission'])){
            foreach ($data['transmission'] as $transmission) {
                if(empty($transmissionUrl)){
                    $transmissionUrl .= '&transmission='.$transmission;
                }
                else
                {
                    $transmissionUrl.= ','.$transmission;
                }
            }
        }

        //LowPrice filter
        $LowPriceUrl="";

        if(!empty($data['LowPrice'])){
            // dd($data['LowPrice']);
            $LowPriceUrl.='&LowPrice='.$data['LowPrice'];
        }


        //MiddelPrice filter
        $MiddelPriceUrl="";

        if(!empty($data['MiddelPrice'])){
            // dd($data['MiddelPrice']);
            $MiddelPriceUrl.='&MiddelPrice='.$data['MiddelPrice'];
        }

        //Min Max  filter
        $MinmaxUrl="";

        if(!empty($data['Min'] && $data['Max'])){
            // dd($data['Min'],$data['Max']);
            $MinmaxUrl.='&Min='.$data['Min'];
            $MinmaxUrl.='&Max='.$data['Max'];
        }




        return redirect()->route('vehicle',$conUrl.$sortByUrl.$locationUrl.$vehicleUrl.$vehicleModelUrl.$bodyTypeUrl.$yearUrl.$EngineCapacityUrl.$fuelTypeUrl.$LowPriceUrl.$MiddelPriceUrl.$MinmaxUrl.$transmissionUrl);
        // return redirect()->route('filterView',$conUrl);
    }    

    

    public function shoppage($user_id){
        // dd($user_id);

        $data=Ad::where('user_id', '=', $user_id)->paginate(10);
        // dd($data);
        
        
        $shop=  DB::table('shops')
                    ->select('shops.*','users.name','shoptimes.sun','shoptimes.mon','shoptimes.tue','shoptimes.wen','shoptimes.thu','shoptimes.fri','shoptimes.sat')
                    ->leftJoin('shoptimes', 'shops.user_id', '=', 'shoptimes.user_id')
                    ->leftJoin('users', 'shops.user_id', '=', 'users.id')
                    ->where('shops.user_id','=',$user_id)
                    ->get();
        // dd($shop);

        

        return view('web/shopview')->with('data',$data)->with('shop',$shop);
    }

    public function shopview(){
        // $shop=Shop::all();
        $shop = DB::table('users')
                ->select('shops.*','users.name','shoptimes.*')
                ->leftJoin('shops', 'users.id', '=', 'shops.user_id')
                ->leftJoin('shoptimes', 'shops.user_id', '=', 'shoptimes.user_id')
                ->where('users.id','=', Auth::user()->id)
                ->get();

        // dd($shop);

        $data=Ad::where('user_id', '=', Auth::user()->id)->paginate(10);
        return view('web/shoppage')->with('data',$data)->with('shop',$shop);
    }


    public function vehicleproduct($id){

        
        $products = DB::table('ads')
                    ->select('ads.*','subcategories.title as subtitle', 'subcategorylevels.title as sublevtitle','shops.shopName as shopName','shops.logo as logo','shops.id as spID','users.name as name','users.group as group')
                    ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                    ->leftJoin("subcategorylevels", "subcategorylevels.id", "=", "ads.subcategorylevel")
                    ->leftJoin('shops', 'ads.user_id', '=', 'shops.user_id')
                    ->leftJoin('users', 'ads.user_id', '=', 'users.id')
                    ->where('ads.id','=', $id)
                    ->get();




        foreach ($products as $product) {
            $subcategory = $product->subcategory;
            // dd($subcategory);

            $sameproducts = DB::table('ads')
                        ->select('ads.*')
                        ->where('category', '=', 2)
                        ->where('subcategory', '=', $subcategory)
                        ->orderBy('id', 'desc')
                        ->take(3)
                        ->get();

            // dd($sameproducts);
        }
        
        // dd($products);
        if(Auth::check()){
        $favorite = DB::table('ads')
                    ->select('ads.*','favorites.*','users.name as name','users.group as group')
                    ->leftJoin('users', 'ads.user_id', '=', 'users.id')
                    ->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')
                    ->where('favorites.femail','=', Auth::user()->name)
                    ->where('ads.id','=', $id)
                    ->get();

                    return view('web/vehicleproduct',compact('products'))->with('favorite',$favorite)->with('sameproducts',$sameproducts);
        }

        return view('web/vehicleproduct',compact('products'))->with('sameproducts',$sameproducts);
    }


    public function post(){

        $cat = Category::all();
        $category = DB::table('subcategories')
                ->select('categories.id','subcategories.title as subcategoryName','categories.title as categoryName')
                ->leftJoin('categories', 'subcategories.categoryID', '=', 'categories.id')
                ->get();
        $dis = District::all();
        return view("web/addpost",compact('category'),compact('cat'))->with('dis',$dis);
    }

    public function editpost($id,$category){

        if($category==1){
            $data=ad::find($id);

           return view('web.editpost')->with('ad',$data);

        }elseif ($category==2) {
            $data=ad::find($id);
   
           return view('web.editpost1')->with('ad',$data);
        }

    }

    public function toppartsSelect(Request $request){

        

        $data=Ad::select('title','condition','address','price','image3')->where('id',$request->id)->take(100)->get();

        return response()->json($data);//then sent this data to ajax success
    }


    public function allsearchparts(Request $request){


        $data =$request->all();
        // dd($data);

        //fullsearch  filter
        $fullsearchUrl="";

        if(!empty($data['fullsearch'])){
            // dd($data['fullsearch']);
            $fullsearchUrl.='&fullsearch='.$data['fullsearch'];
        }

        return redirect()->route('shop',$fullsearchUrl);
        
    }

    public function allsearchvehicle(Request $request){


        $data =$request->all();
        // dd($data);

        //fullsearch  filter
        $vehiclefullsearchUrl="";

        if(!empty($data['vehiclefullsearch'])){
            // dd($data['fullsearch']);
            $vehiclefullsearchUrl.='&vehiclefullsearch='.$data['vehiclefullsearch'];
        }

        return redirect()->route('vehicle',$vehiclefullsearchUrl);
        
    }

    public function favorite(Request $request){
        
    //    dd($request->id);

            $fadId=$request->id;
            
            
            if(Favorite::where('femail',Auth::user()->name)->where('fadId',$fadId)->exists())
            {
                $Favorite = Favorite::where('femail',Auth::user()->name)->where('fadId',$fadId)->delete();

                // $data=Favorite::find($Favorite->fid);
                // $Favorite->delete();

                return response()->json(['status'=>$Favorite]);

            }else{

            $data=New Favorite;

            $data->fadId=$fadId;
            $data->femail=Auth::user()->name;
            $data->fstatus=1;
            

            $data->save();

            return back();
       
            }

    }

    public function favoriterequest(Request $request){

        $favorite1=$request->favorite1;

        // dd($favorite1);

        if($favorite1==1){
            return view('web.login');
        }
        return view('web.login');
    }



    public function shopNameId(Request $request, $id){

        $shopName=$request->shopName;
        
        $data=Shop::find($id);

        $data->shopName=$shopName;

        $data->save();

            if($data){
                alert()->success('Shop Name Updated')->autoclose(3500);
                return redirect('/web/shopview');
               //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }
    }

    public function shopAddressId(Request $request, $id){

        $street=$request->street;
        $city=$request->city;

        
        $data=Shop::find($id);

        $data->street=$street;
        $data->city=$city;        

        $data->save();

            if($data){
                alert()->success('Shop Address Updated')->autoclose(3500);
                return redirect('/web/shopview');
               //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }

    }
    
    public function shopPhoneId(Request $request, $id){

        $pNumber1=$request->pNumber1;
        $pNumber2=$request->pNumber2;

        
        $data=Shop::find($id);

        $data->pNumber1=$pNumber1;
        $data->pNumber2=$pNumber2;       

        $data->save();

            if($data){
                alert()->success('Shop Phone Number Updated')->autoclose(3500);
                return redirect('/web/shopview');
                //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }
    }

    public function shopEmailId(Request $request, $id){

        $email=$request->email;

        
        $data=Shop::find($id);

        $data->email=$email;       

        $data->save();

            if($data){
                alert()->success('Shop Phone Email Updated')->autoclose(3500);
                return redirect('/web/shopview');
                //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }

    }

    public function shopWhatsappId(Request $request, $id){

        $wNumber=$request->wNumber;

        $data=Shop::find($id);

        $data->wNumber=$wNumber;       

        $data->save();

            if($data){
                alert()->success('Shop Whatsapp Number Updated')->autoclose(3500);
                return redirect('/web/shopview');
                //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }

    }
    public function shopLogoId(Request $request, $id){

        // dd($request->logo);

        $logo=$request->logo;

        if( $request->hasFile( 'logo' ) ){
            $filename1=rand(111111, 999999).'.'.$logo->getClientOriginalExtension();
            $request->logo->move('image/shop',$filename1);
        }

        $data=Shop::find($id);

        if($request->logo==NULL){
                
        }else{
            $data->logo=$filename1;
        }      

        $data->save();

        if($data){
            alert()->success('Shop Logo Updated')->autoclose(3500);
            return redirect('/web/shopview');
            //  return back();
        }else{
            alert()->warning('Something went wrong.');
        }
    
    }

    public function shopBannerId(Request $request, $id){

        // dd($request->banner);

        $banner=$request->banner;
        $banner2=$request->banner2;
        $banner3=$request->banner3;

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

        $data=Shop::find($id);


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


        $data->save();

        if($data){
            alert()->success('Shop Banner Updated')->autoclose(3500);
            return redirect('/web/shopview');
            //  return back();
        }else{
            alert()->warning('Something went wrong.');
        }
    }



    public function BodyComponents(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function CarAudioSystems(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function LightingIndicators(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function WheelsTyresRims(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function SuspensionSteeringHandling(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function EnginesEngineParts(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Accessories(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function InteriorPartsFurnishings(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Brakes(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function AirConditioningHeating(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }


    public function MirrorComponents(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function UndercarriageParts(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function HelmetsClothingProtection(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function ExhaustsExhaustParts(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function AirIntakeFuelDelivery(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function ToolsEquipment(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function AutomobileBatteries(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function WindscreenWipersWashers(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function TransmissionDrivetrain(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function OilsLubricantsFluids(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Chassis(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function TurbosSuperchargers(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function FootrestsPedalsPegs(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function TyresRims(Request $request){

        $data=Ad::select('*')->where('accessoryType',$request->accessoryType)->simplePaginate(12);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Toyota(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(12);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Suzuki(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                // ->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Honda(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Nissan(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Mitsubishi(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Tata(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Bajaj(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function TVS(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Isuzu(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Mahindra(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Mazda(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Hero(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Micro(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Daihatsu(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Hyundai(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function HeroHonda(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function DFSK(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function MercedesBenz(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Kia(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Ford(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Perodua(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Renault(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Peugeot(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function BMW(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Yamaha(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

    public function Audi(Request $request){

        // $data=Ad::select('*')->where('accessoryType',$request->brand)->leftJoin('favorites', 'ads.id', '=', 'favorites.fadId')->simplePaginate(10);

        $data=  DB::table('ads')
                ->select('ads.*')
                ->leftJoin("subcategories", "subcategories.id", "=", "ads.subcategory")
                ->where('subcategories.title','=', $request->brand)
                ->where('ads.category', '=', 2)
                ->simplePaginate(10);

        // dd($data);

        $favorite=Favorite::all();
        $sub=Subcategory::where('categoryID', '=', 1)->get();
        $sublev=Subcategorylevel::where('categoryID', '=', 1)->get();
        $location=District::all();
        $topad=Ad::where('category', '=', 1)->where('status', '=', 1)->get();

        return view('web/sidebar1')->with('data',$data)->with('sub',$sub)->with('sublev',$sublev)->with('location',$location)->with('topad',$topad)->with('favorite',$favorite);
 
    }

}

