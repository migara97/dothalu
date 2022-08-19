<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    function checklogin(Request $request)
    {
        
        $this->validate($request,[
            // 'name' => 'required|name',
            'password' => 'required|alphaNum|min:3'
        ]);
        $user_data = array(
            'name' => $request->get('name'),
            'password' => $request->get('password')
        );
        

        if(Auth::attempt($user_data))
        {
            $role = auth()->user()->group;
                if($role=='Superadmin' || $role=='Admin'){               
                return redirect('/adindex');
            }else{
                return view('web/index');
            } 
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        }
    }


    public function logout(){
         Auth::logout();
        // $request->session()->invalidate();    
        // $request->session()->regenerateToken();    
        return redirect('/login');
    }



    function weblogin(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            // 'name' => 'required|name',
            'password' => 'required|alphaNum|min:3'
        ]);
        $user_data = array(
            'name' => $request->get('name'),
            'password' => $request->get('password')
        );
        

        if(Auth::attempt($user_data))
        {
            $role = auth()->user()->group;
                if($role=='WebUser'||$role=='Editor'){
                    return redirect('/');               
                
                }else{
                    return view('/adindex');
                } 
        }
        else
        {
            return back()->with('error','Wrong Login Details');
            
            // alert()->success('ads Insert Successfull')->autoclose(3500);
            // return back();
            // dd("error");
            
        }
    }
    public function adindex(){
        // dd('admin');
        return view('admin/adminindex');
    }
    public function userRegister(){
            return view('admin/register');
  
    }
    public function login(){
        return view('login');
    }





}
