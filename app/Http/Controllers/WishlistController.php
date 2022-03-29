<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function addToWishlist($product_id){
        if (Auth::check()) {
            Wishlist::insert([
                'user_id' => Auth::id(),
                'product_id' => $product_id,
            ]);
            return Redirect()->back()->with('cart','Produkt dodany do ulubionych');
        }else{
            return Redirect()->route('login')->with('loginError','Najpierw musisz sie zalogowac');
        }
    }

    // ------------- pages ----------- 
    public function wishPage(){
        $wishlists = Wishlist::where('user_id',Auth::id())->latest()->get();
        return view('pages.wishlist',compact('wishlists'));
    }

     // --------- cart destroy ------
     public function destroy($wishlist_Id){
        Wishlist::where('id',$wishlist_Id)->where('user_id',Auth::id())->delete();
        return Redirect()->back()->with('cart_delete','Produkt usuniety z ulubionych');
    }

}
