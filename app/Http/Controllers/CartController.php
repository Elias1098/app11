<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    function cartItems()
    {
        
            $user_id = session()->get('user')['id'];
            $cartItems = Cart::where('user_id',$user_id)->count();
            return $cartItems;
     
    }

    function cartDetails()
    {
        $userId= session()->get('user')['id'];
        $products = DB::table('cart')
                      ->join('products','cart.product_id','=','products.id')
                      ->where('cart.user_id',$userId)
                      ->select('products.*','cart.id as cart_id')
                      ->get();
                      return view('cartDetail',['products'=>$products]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartDetails');
    }
}
