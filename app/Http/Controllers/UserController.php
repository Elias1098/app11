<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

 use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function register(Request $request )
    {
        $request->validate([
            'username' => 'required|max:25',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        /*
    $user = new User();
    $user->name= $request->username;
    $user->email= $request->email;
    $user->password =Hash::make($request->password);
    $user->save();
    */
    DB::table('users')->insertOrIgnore(

            ['name'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)]

        );
    return redirect('/login');
    }

    function login(Request $req)
    {

        //return $req->input();
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is incorrect";
        }
        else
        {
            //store session
            $req->session()->put('user',$user);
            //retrive posts by user id of one to many relationship
            $user_id = session()->get('user')['id'];
            $posts = User::find($user_id)->posts()
                            ->where('user_id',$user_id)
                            ->get();
                      
          return view('home',['posts'=>$posts]);
          //return  view('/home');
        }
    }

    function users()
    {
        //query builder
        $users= DB::table('users')->distinct()->orderBy('id','DESC')->get();
       /*
        $users= DB::table('users')->orderBy('id','DESC')->get();
        */
        $counts = DB::table('users')->count();
        $min = DB::table('users')->min('id');
        $max = DB::table('users')->max('id');
        $avg = DB::table('users')->average('id');

        $users_chunk= DB::table('users')->orderBy('name','desc')->chunk(3, function ($userss)
                          {
                          return $userss;
                          });

       $users = DB::table('users')->paginate(6);
        return view('users',['users'=>$users,
                            'counts'=>$counts,
                            'min'=>$min,'max'=>$max,
                            'avg'=>$avg,'users_chunk'=>$users_chunk]);
        //$users = User::all();
        //return view('users', ['users' => $users]);
        //return view('users')->with('users', $users);
        //return view('users',compact('users'));
        //return $users;
    }
    function show($id)
    {
        /*
        $user = DB::table('users')->find($id);
        if(!$user)
        return "Not found";
        else
        return  $user;
        */
        $user = User::findOrFail($id);
        /*
        $user = DB::table('users')->where('id',$id)->get();
                    */
                    /*
        $user = DB::table('users')->select('name','email')->where('id',$id)->get();
                */
                /*
                $user = DB::table('users')->where('id','<>',$id)->get();
                */
             /*
                $user = DB::table('users')->whereNotNull('updated_at')->get();
                */
                /*
                $user = DB::table('users')->latest()->first();
                */
                /*
                $user = DB::table('users')->groupBy('name')->having('id', '>', 2)->get();
                */
        //  $user = DB::table('users')->distinct()->get();
        //return $user;

        return view('show',['user'=>$user]);
    }
    function update(Request $request)
    {

       //return $request->name;
        /*
        $user   = new User();
        $user = $request->username;
        $user = $request->email;
        $user = Hash::make($request->password);
        $user->save();
        */
        $user = DB::table('users')
              ->where('id', $request->id)
              ->update(
                ['name' => $request->name,
                'email' => $request->email]
                );
       //return $user;
        return redirect('users');
    }

    function delete($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect('users');
    }

    function posts()
    {
        if(session()->has('user'))
        {
            $user_id = session()->get('user')['id'];
            $posts = User::find($user_id)->posts()
                            ->where('user_id',$user_id)
                            ->get();
        return view('home',['posts'=>$posts]);
        }
    }
}
