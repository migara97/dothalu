<?php

namespace App\Http\Controllers;

// use App\Models\Webuser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Models\Ad;
use Illuminate\Support\Facades\Stroage;

class WebuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.webuserRegister');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $user=User::all();
        $user = DB::table('users')->where('group', 'WebUser')->get();
       
        return view('admin.webuserView')->with('users',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
           
       ]);
     

        $user =New User;
         
         
        
         
        $user->name=$request->email;
        $user->group='WebUser';
        // $user->email=$request->email;
        $user->password=Hash::make($request->password);
        
        
       
         
  
        $user->save();
  
        if($user){
            alert()->success('Web User Register Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Webuser  $webuser
     * @return \Illuminate\Http\Response
     */
    public function show(Webuser $webuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Webuser  $webuser
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=User::find($id);
        return view('admin.webuserUpdate')->with('webuser',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Webuser  $webuser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //echo($request);
        

        $id=$request->id;
        $name=$request->email;
        $password=$request->password;
        $active=$request->active;
        

        
        $data =User::find($id);

        if($active==null){
            $active=0;

            $data->name=$name;
            $data->password=Hash::make($password);
            $data->status=$active;
            

            $data->save();

            if($data){
                alert()->success('Web User Update Successfull')->autoclose(3500);
                return redirect('/viewWebuser');
               //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }

        }else{
         

            $data->name=$name;
            $data->password=Hash::make($password);
            $data->status=$active;
        

        $data->save();

        if($data){
            alert()->success('Web User Update Successfull')->autoclose(3500);
            return redirect('/viewWebuser');
           //  return back();
        }else{
            alert()->warning('Something went wrong.');
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Webuser  $webuser
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=User::find($id);
        $data->delete();
        if($data){
            alert()->success('Web User Delete Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
            return back();
        }
    }

    public function updateprofile(Request $request){
        // dd($request);

        $id=$request->id;
        $name=$request->email;
        $password=$request->password;

        $data =User::find($id);

        $data->name=$name;
        $data->password=Hash::make($password);
           

        $data->save();

        if($data){
            alert()->success('Web User Update Successfull')->autoclose(3500);
            return back();
            // return redirect("/web/register");
        }else{
            alert()->warning('Something went wrong.');
        }
    }

    public function adupdate1(Request $request,$id)
    {
        // dd($request);



        $file1=$request->img1;
        $file2=$request->img2;
        $file3=$request->img3;
        $file4=$request->img4;
        $file5=$request->img5;


        
        if ( $request->hasFile( 'img1' ) ) {
            $filename1=rand(111111, 999999).'.'.$file1->getClientOriginalExtension();
            $request->img1->move('image/ads',$filename1);
        }
        if ( $request->hasFile( 'img2' ) ) {
            $filename2=rand(111111, 999999).'.'.$file2->getClientOriginalExtension();
            $request->img2->move('image/ads',$filename2);
    
        }
        if ( $request->hasFile( 'img3' ) ) {
           
        $filename3=rand(111111, 999999).'.'.$file3->getClientOriginalExtension();
        $request->img3->move('image/ads',$filename3);
 
        }
        if ( $request->hasFile( 'img4' ) ) {
            $filename4=rand(111111, 999999).'.'.$file4->getClientOriginalExtension();
        $request->img4->move('image/ads',$filename4);
        }
        if ( $request->hasFile( 'img5' ) ) {
            $filename5=rand(111111, 999999).'.'.$file5->getClientOriginalExtension();
            $request->img5->move('image/ads',$filename5);
        }
       

      
        
        
       


        $id=$request->id;
        $title=$request->title;
        $condition=$request->condition;
        $accessoryType=$request->accessoryType;
        $chassisCode=$request->chassisCode;
        $partNumber=$request->partNumber;
        $vehicleModel=$request->vehicleModel;
        $year=$request->year;
        $qty=$request->qty;
        $discription=$request->discription;
        $salNumber=$request->salNumber;
        $price=$request->price;
        $address=$request->address;
        $action=$request->action;
        
        $data=Ad::find($id);

        //dd($data);
        
        $data->title=$title;
        $data->condition=$condition;
        $data->accessoryType=$accessoryType;
        $data->chassisCode=$chassisCode;
        $data->partNumber=$partNumber;
        $data->vehicleModel=$vehicleModel;
        $data->year=$year;
        $data->qty=$qty;

            if($request->img1==NULL){
                
            }else{
                $data->image1=$filename1;
            }
            if($request->img2==NULL){
                
            }else{
                $data->image2=$filename2;
            }
            if($request->img3==NULL){
                
            }else{
                $data->image3=$filename3;
            }
            if($request->img4==NULL){
                
            }else{
                $data->image4=$filename4;
            }
            if($request->img5==NULL){
                
            }else{
                $data->image5=$filename5;
            }
            $data->discription=$discription;
            $data->salNumber=$salNumber;
            $data->price=$price;
            $data->address=$address;

            if($request->action==NULL){
                $data->action=0;
            }else{
                $data->action=$action;
            }

            $data->save();
    
            if($data){
                alert()->success('Post Update Successfull')->autoclose(3500);
                return redirect('/web/myAccount');
                //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }


        }


        public function adupdate2(Request $request,$id)
        {
            //dd($request);


            $file1=$request->img1;
            $file2=$request->img2;
            $file3=$request->img3;
            $file4=$request->img4;
            $file5=$request->img5;


            if ( $request->hasFile( 'img1' ) ) {
                $filename1=rand(111111, 999999).'.'.$file1->getClientOriginalExtension();
                $request->img1->move('image/ads',$filename1);
            }
            if ( $request->hasFile( 'img2' ) ) {
                $filename2=rand(111111, 999999).'.'.$file2->getClientOriginalExtension();
                $request->img2->move('image/ads',$filename2);
        
            }
            if ( $request->hasFile( 'img3' ) ) {
            
            $filename3=rand(111111, 999999).'.'.$file3->getClientOriginalExtension();
            $request->img3->move('image/ads',$filename3);
    
            }
            if ( $request->hasFile( 'img4' ) ) {
                $filename4=rand(111111, 999999).'.'.$file4->getClientOriginalExtension();
            $request->img4->move('image/ads',$filename4);
            }
            if ( $request->hasFile( 'img5' ) ) {
                $filename5=rand(111111, 999999).'.'.$file5->getClientOriginalExtension();
                $request->img5->move('image/ads',$filename5);
            }
       
            $id=$request->id;
            $title=$request->title;
            $condition=$request->condition;
            $bodyType=$request->bodyType;
            $myear=$request->myear;
            $transmission=$request->transmission;
            $fuelType=$request->fuelType;
            $EngineCapacity=$request->EngineCapacity;
            $km=$request->km;
            $option1=$request->option1;
            $option2=$request->option2;
            $option3=$request->option3;
            $option4=$request->option4;
            $option5=$request->option5;
            $option6=$request->option6;
            $option7=$request->option7;
            $option8=$request->option8;
            $option9=$request->option9;
            $option10=$request->option10;
            $option11=$request->option11;
            $option12=$request->option12;
            $option13=$request->option13;
            $option14=$request->option14;
            $option15=$request->option15;
            $option16=$request->option16;
            $discription=$request->discription;
            $salNumber=$request->salNumber;
            $price=$request->price;
            $address=$request->address;
            $action=$request->action;

            $data1=Ad::find($id);

            $data1->title=$title;
            $data1->condition=$condition;
            $data1->myear=$myear;
            $data1->transmission=$transmission;
            $data1->fuelType=$fuelType;
            $data1->EngineCapacity=$EngineCapacity;
            $data1->km=$km;
            $data1->option1=$option1;
            $data1->option2=$option2;
            $data1->option3=$option3;
            $data1->option4=$option4;
            $data1->option5=$option5;
            $data1->option6=$option6;
            $data1->option7=$option7;
            $data1->option8=$option8;
            $data1->option9=$option9;
            $data1->option10=$option10;
            $data1->option11=$option11;
            $data1->option12=$option12;
            $data1->option13=$option13;
            $data1->option14=$option14;
            $data1->option15=$option15;
            $data1->option16=$option16;
            if($request->img1==NULL){
                
            }else{
                $data1->image1=$filename1;
            }
            if($request->img2==NULL){
                
            }else{
                $data1->image2=$filename2;
            }
            if($request->img3==NULL){
                
            }else{
                $data1->image3=$filename3;
            }
            if($request->img4==NULL){
                
            }else{
                $data1->image4=$filename4;
            }
            if($request->img5==NULL){
                
            }else{
                $data1->image5=$filename5;
            }
            $data1->discription=$discription;
            $data1->salNumber=$salNumber;
            $data1->price=$price;
            $data1->address=$address;
            if($request->action==NULL){
                $data1->action=0;
            }else{
                $data1->action=$action;
            }

            $data1->save();
 
            if($data1){
                alert()->success('Post Update Successfull')->autoclose(3500);
                return redirect('/web/myAccount');
               //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }


        }

    public function webstore(Request $request)
    {
        // dd($request);


        $this->validate($request,[
            'title' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'subcategorylavel' => 'required',
            'img1' => 'required',
            'img2' => 'required',
            'img3' => 'required',
            'img4' => 'required',
            // 'condition' => 'required',
            'discription' => 'required',
            'user_id' => 'required',
            'salNumber' => 'required',
            'address' => 'required',
            'price' => 'required',
            ]);


            $ads=New Ad;
            
            $title=$request->title;
            $category=$request->category;
            $subcategory=$request->subcategory;
            $subcategorylavel=$request->subcategorylavel;
            $condition=$request->condition;
            $vehicalcondition=$request->vehicalcondition;
            $file1=$request->img1;
            
            $filename1=rand(111111, 999999).'.'.$file1->getClientOriginalExtension();
            $request->img1->move('image/ads',$filename1);

            $file2=$request->img2;

            $filename2=rand(111111, 999999).'.'.$file2->getClientOriginalExtension();
            $request->img2->move('image/ads',$filename2);

            $file3=$request->img3;

            $filename3=rand(111111, 999999).'.'.$file3->getClientOriginalExtension();
            $request->img3->move('image/ads',$filename3);

            $file4=$request->img4;

            $filename4=rand(111111, 999999).'.'.$file4->getClientOriginalExtension();
            $request->img4->move('image/ads',$filename4);

            $file5=$request->img5;

            $filename5=rand(111111, 999999).'.'.$file5->getClientOriginalExtension();
            $request->img5->move('image/ads',$filename5);

            $accessoryType=$request->accessoryType;
            $bodyType=$request->bodyType;
            $chassisCode=$request->chassisCode;            
            $partNumber=$request->partNumber;
            $vehicleModel=$request->vehicleModel;
            $year=$request->year;
            $qty=$request->qty;
            $myear=$request->myear;
            $transmission=$request->transmission;
            $fuelType=$request->fuelType;
            $EngineCapacity=$request->EngineCapacity;
            $km=$request->km;
            $option1=$request->option1;
            $option2=$request->option2;
            $option3=$request->option3;
            $option4=$request->option4;
            $option5=$request->option5;
            $option6=$request->option6;
            $option7=$request->option7;
            $option8=$request->option8;
            $option9=$request->option9;
            $option10=$request->option10;
            $option11=$request->option11;
            $option12=$request->option12;
            $option13=$request->option13;
            $option14=$request->option14;
            $option15=$request->option15;
            $option16=$request->option16;
            $discription=$request->discription;
            $user_id=$request->user_id;
            $salNumber=$request->salNumber;
            $price=$request->price;
            $address=$request->address;
            $district=$request->district;
            


            //  dd($filename);
            $ads->title=$title;
            $ads->category=$category;
            $ads->subcategory=$subcategory;
            $ads->subcategorylevel=$subcategorylavel;
            if($request->category==1){
                $ads->condition=$condition;
            }else{
                $ads->condition=$vehicalcondition;
            }
            $ads->image1=$filename1;
            $ads->image2=$filename2;
            $ads->image3=$filename3;
            $ads->image4=$filename4;
            $ads->image5=$filename5;
            $ads->accessoryType=$accessoryType;
            $ads->bodyType=$bodyType;
            $ads->chassisCode=$chassisCode;
            $ads->partNumber=$partNumber;
            $ads->vehicleModel=$vehicleModel;
            $ads->year=$year;
            $ads->qty=$qty;
            $ads->myear=$myear;
            $ads->transmission=$transmission;
            $ads->fuelType=$fuelType;
            $ads->partNumber=$partNumber;
            $ads->EngineCapacity=$EngineCapacity;
            $ads->km=$km;
            $ads->option1=$option1;
            $ads->option2=$option2;
            $ads->option3=$option3;
            $ads->option4=$option4;
            $ads->option5=$option5;
            $ads->option6=$option6;
            $ads->option7=$option7;
            $ads->option8=$option8;
            $ads->option9=$option9;
            $ads->option10=$option10;
            $ads->option11=$option12;
            $ads->option12=$option13;
            $ads->option13=$option13;
            $ads->option14=$option14;
            $ads->option15=$option15;
            $ads->option16=$option16;
            $ads->discription=$discription;
            $ads->user_id=$user_id;
            $ads->salNumber=$salNumber;
            $ads->address=$address;
            $ads->price=$price;
            $ads->district=$district;

            $ads->save();
  
            if($ads){
                alert()->success('ads Insert Successfull')->autoclose(3500);
                return back();
            }else{
                alert()->warning('Something went wrong.');
            }
    }


       
}
