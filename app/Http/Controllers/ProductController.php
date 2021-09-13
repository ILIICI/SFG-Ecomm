<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Classes\Cart;
use Session;

class ProductController extends Controller
{
    public function DisplayShoppingCart(){
        if(!Session::has('cart')){
            return view('guest.shoppingcart');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        return view('guest.shoppingcart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
    }
    
    public function AddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($product,$product->id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }
    public function ReduceByOne($id){
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->reduceByOne($id);
        
        if(count($cart->items) > 0 ){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
            return redirect('/');
        }

        return redirect()->back();
    }
    public function IncreaseByOne($id){
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->increaseByOne($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }
    public function RemoveItem($id){
        $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->removeItem($id);
        if(count($cart->items) > 0 ){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
            return redirect('/');
        }
        return redirect()->back();
    }

}
