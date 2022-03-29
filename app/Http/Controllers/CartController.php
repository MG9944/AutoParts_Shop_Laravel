<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request,$product_id){

        $check = Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->first();
        if ($check) {
            Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->increment('qty');
            return Redirect()->back()->with('cart','Produkt dodany do koszyka');
        }else{
            Cart::insert([
                'product_id' => $product_id,
                'qty' => 1,
                'price' => $request->price,
                'user_ip' => request()->ip(),
            ]);
            return Redirect()->back()->with('cart','Produkt dodany do koszyka');
        }
        
    }

    // -------------- cart page --------------------
    public function cartPage(){
        
        $carts = Cart::where('user_ip',request()->ip())->latest()->get();
        $subtotal = Cart::all()->where('user_ip',request()->ip())->sum(function($t){
            return $t->price * $t->qty;
         });
        return view('pages.cart',compact('carts','subtotal'));
    }

    // --------- cart destroy ------
    public function destroy($cart_id){
        Cart::where('id',$cart_id)->where('user_ip',request()->ip())->delete();
        return Redirect()->back()->with('cart_delete','Produkt usuniety z koszyka');
    }

    // ------------- cart quantity update ----------- 
    public function quantityUpdate(Request $request,$cart_id){
        Cart::where('id',$cart_id)->where('user_ip',request()->ip())->update([
            'qty' => $request->qty,
        ]);
        return Redirect()->back()->with('cart_update','Ilosc zmieniona');
    }   
}
