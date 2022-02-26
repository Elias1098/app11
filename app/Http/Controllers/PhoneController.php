<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    function index()
    {
        if(session()->has('user'))
        {
            $user_id = session()->get('user')['id'];
            /*
            $phones = Phone::join('users','users.id','=','phones.user_id')
                                ->Where('phones.user_id','=',$user_id)
                               ->get(['users.*','phones.*']);
            */
            //One to One relationship
            $phones = Phone::find($user_id)->where('user_id',$user_id)
                                           ->get();
            $no=1;
            return view('phone',compact('phones','no'));
        }
      
    }
}
