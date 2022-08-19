<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Socialite;
use Auth;
use App\Models\User;
class FacebookController extends Controller
{
    public function FacebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function FacebookCallback()
    {
        // dd("call back");
        try {
                $user = Socialite::driver('facebook')->user();
                // dd($user);
                $authuser = User::where('facebook_id', $user->id)->first();

                
                //find user
                if($authuser){
                    Auth::login($authuser);
                    return redirect('/');
                }else{
                    $newUser = User::create([
                        'name' => $user->email,
                        'facebook_id'=> $user->id,
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
