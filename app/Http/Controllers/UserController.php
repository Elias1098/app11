<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function register(Request $request )
    {
    $user = new User();
    $user->name= $request->username;
    $user->email= $request->email;
    $user->password =Hash::make($request->password);
    $user->save();
    return redirect('/login');
    }

    function login(Request $request)
    {
        $user = User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return "Username or password is incorrect";
        }
        else
        {
            $request->session()->put('user',$user);
          return  redirect('/');
        }
       
    }

    function users()
    {
        $users = User::all();
        //return view('users', ['users' => $users]);
        //return view('users')->with('users', $users);
        return view('users',compact('users'));
        //return $users;
    }
}
