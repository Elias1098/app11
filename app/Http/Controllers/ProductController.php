<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('product',['products'=>$products]);
    }
    function detail($id)
    {
        $product = Product::find($id);
        return view('detail',['product'=>$product]);
    }
    function addToCart(Request $request)
    {
        if(session()->has('user'))
        {
            $user_id = session()->get('user')['id'];
            $product_id = $request->product_id;
            $cart = new Cart();
            $cart->user_id= $user_id;
            $cart->product_id =$product_id;
            $cart->save();
            return redirect()->back()->with('success', 'Successfully added to the cart!');       
         }
         else
         {
             return "Please login";
         }

    }

    function search(Request $request)
    {
        $products = Product::where('name','like','%'.$request->input('query').'%')->get();
        return view('search',['products'=>$products]);
    }

    function orderNow()
  {

    $userId= session()->get('user')['id'];
     $total = DB::table('cart')
                  ->join('products','cart.product_id','=','products.id')
                  ->where('cart.user_id',$userId)
                  ->select('products.*','cart.id as cart_id')
                  ->sum('products.price');
                  return view('ordernow',['total'=>$total]);
  }
 
}
