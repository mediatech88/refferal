<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Network;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //user controller
    public function loadRegister()
    {
        return view('register');
    }
    public function registered(Request $request)
    {
        $request->validate([
            'name'=>'required|string|min:2',
            'email'=>'required|string|email|max:100|unique:users',
            'password'=>'required|min:6|confirmed',
        ]);

        $refferalCode=Str::random(5);

        if (isset($request->refferal_code)) {
            $userData=User::where('refferal_code',$request->refferal_code)->get();

            if (count($userData)>0) {
                $user_id = User::insertGetId([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                    'refferal_code'=>$refferalCode,
                ]);

                Network::insert([
                    'refferal_code' => $request->refferal_code,
                    'user_id' => $user_id,
                    'parent_user_id' => $userData[0]['id'],

                ]);



            }else{
                return back()->with('error','Please Enter Valid Code');
            }
        }else{
            User::insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'refferal_code'=>$refferalCode,
            ]);
        }
        return back()->with('success','Your Registration Successfull!');
    }
}
