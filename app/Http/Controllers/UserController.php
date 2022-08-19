<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;

class UserController extends Controller
{
    public function store(Request $request){

        // dd($request->all());

        

        $this->validate($request,[
            'name' => 'required',
            'group' => 'required',
            'password' => 'required',
           
       ]);

        $user =New User;
         
         
        
         
        $user->name=$request->name;
        $user->group=$request->group;
        // $user->email=$request->email;
        $user->password=Hash::make($request->password);
        
        
       
         
  
        $user->save();
  
        if($user){
            alert()->success('Insert Data Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
        }
         
      
  
      } 

      public function view(){

        $user=User::all();
       
        return view('admin.view')->with('users',$user); 
        // return view('admin.view');
      }

      public function edit($id)
    {
        $data=User::find($id);
        // dd($data);
        return view('admin.userUpdate')->with('user',$data);

    }
    public function update(Request $request)
    {
        //echo($request);
        

        $id=$request->id;
        $name=$request->name;
        $group=$request->group;
        $password=$request->password;
        $active=$request->active;
        

        $data=User::find($id);


        if($active==null){
            $active=0;

            $data->name=$name;
            $data->group=$group;
            $data->password=Hash::make($password);
            $data->status=$active;
            

            $data->save();

            if($data){
                alert()->success('User Update Successfull')->autoclose(3500);
                return redirect('/userView');
               //  return back();
            }else{
                alert()->warning('Something went wrong.');
            }

        }else{
         

            $data->name=$name;
            $data->group=$group;
            $data->password=Hash::make($password);
            $data->status=$active;
        

        $data->save();

        if($data){
            alert()->success('User Update Successfull')->autoclose(3500);
            return redirect('/userView');
           //  return back();
        }else{
            alert()->warning('Something went wrong.');
        }
      }
    }

    public function destroy($id)
    {
        $data=User::find($id);
        $data->delete();
        if($data){
            alert()->success('User Delete Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
            return back();
        }
    }
}
