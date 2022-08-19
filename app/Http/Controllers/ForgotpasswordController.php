<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Forgotpassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Stroage;
use Illuminate\Support\Facades\Validator;
use Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;



class ForgotpasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.forgotpassemail');
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
            'email' => 'required',
        ]);

        $forgotpassword=New Forgotpassword;
            
        $email=$request->email;
        $code=uniqid();

        $forgotpassword->email=$email;
        $forgotpassword->code=$code;

        $forgotpassword->save();


        $details = [
            'title' => 'Password Reset Code',
            'code' => $code

            
        ];      

        Mail::send('TestMail', $details, function($message) use ($email){
          
            $message->to($email)->subject
               ('Laravel HTML Testing Mail');
            $message->from('dothalulk@gmail','Dothalu Reset Password');
         });

  
        return view('web.forgotpasscode');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function show(Forgotpassword $forgotpassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function edit(Forgotpassword $forgotpassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forgotpassword $forgotpassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forgotpassword  $forgotpassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forgotpassword $forgotpassword)
    {
        //
    }

    public function code(Request $request)
    {
        // dd($request);
        $code=$request->code;

        $forgot = DB::table('forgotpasswords')
                ->where('code', $code)
                ->get();
        
        if($forgot){
            alert()->success('Reset Code Successfull')->autoclose(3500);
            return view('web.resetpass');
            
        }else{
            alert()->warning('Something went wrong.');
        }
    


    }


    public function resetUser(Request $request)
    {
        // dd($request);
        
        $name=$request->email;
        $password=$request->password;
        $active=$request->active;
        
        $data = User::where('name', '=', $name)->first();
        
        
        // $data = User::find($name);

        if($active==null){
            $active=0;

            $data->name=$name;
            $data->password=Hash::make($password);
            $data->status=$active;
            
            // dd($data->name=$name);

            

        }else{
         

            $data->name=$name;
            $data->password=Hash::make($password);
            $data->status=$active;
        

        
      }
      $data->save();

            if($data){
                alert()->success('Web User Update Successfull')->autoclose(3500);
                return view('web.login');
               //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }
    }



    

}
