<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    function orderPlace(Request $req)
    {
        //return $req->input();
  
        $userId = session()->get('user')['id'];
        $allCart = Cart::where('user_id',$userId)->get();
          foreach($allCart as $cart)
          {
              $order = new Order();
              $order->product_id = $cart['product_id'];
              $order->user_id = $cart['user_id'];
              $order->status = "pending";
              $order->payment_method = $req->payment_method;
              $order->payment_status= "pending";
              $order->address= $req->address;
              $order->save();
              $allCart = Cart::where('user_id',$userId)->delete();
  
          }
          return redirect('/home');
    }
    function order()
    {
        $no=1;
        $userId = session()->get('user')['id'];
        $orders= DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('order',['orders'=>$orders,'no'=>$no]);
    }
}
