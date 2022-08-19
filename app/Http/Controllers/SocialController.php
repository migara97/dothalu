<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use Auth;
use App\Models\User;



class SocialController extends Controller
{

public function redirect()
{
    return Socialite::driver('google')->redirect();
}

public function callback()
{
    // dd("call back");
    try {
            $user = Socialite::driver('google')->user();
            // dd($user);
            $authuser = User::where('google_id', $user->id)->first();

            
            //find user
            if($authuser){
                Auth::login($authuser);
                return redirect('/');
            }else{
                $newUser = User::create([
                    'name' => $user->email,
                    'google_id'=> $user->id,
                    'group' => 'WebUser',
                    // 'password' => encrypt('123456dummy')
                    'password' => uniqid()
                ]);
                Auth::login($newUser);
                return redirect('/');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
   }

   
   
}
