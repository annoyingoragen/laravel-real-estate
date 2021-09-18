<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index($id)
    {
        $userid=Auth::user()->id;
        $user=User::find($userid);
        if($user->interested_in==null)
        {
            $array_of_interests=array();
            array_push($array_of_interests,$id);
           
            $interests=json_encode($array_of_interests);
 
         
            $user->interested_in=$interests;
          
            $user->save();
        }
        else{
           $previous_interests= $user->interested_in;
        //    dd($previous_interests);
            $previous_interests=json_decode($previous_interests,true);
        
           array_push($previous_interests,$id);
           
           $interests=json_encode($previous_interests);

        
           $user->interested_in=$interests;
            $user->save();
           dd($interests);
        }
        
        return view('dashboard');
    }
}
