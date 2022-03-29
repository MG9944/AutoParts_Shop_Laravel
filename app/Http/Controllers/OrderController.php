<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderItem;
use App\Shipping;
use Carbon\Carbon;
use App\Rules\PolishPostCode;
use App\Rules\NoHtml;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function order(){
        $orders = Order::where('user_id',Auth::id())->latest()->get();
        return view('pages.order-complete',compact('orders'));
    }

    // order view
    public function orderView($order_id){
        $order = Order::findOrFail($order_id);
        $orderitems = OrderItem::with('product')->where('order_id',$order_id)->get();
        $shipping = Shipping::where('order_id',$order_id)->first();
        return view('pages.profile.order-view',compact('order','orderitems','shipping'));
    }

    public function storeOrder(Request $request){

        $request->validate([
            'shipping_first_name' => ['required', 'string', new NoHtml],
            'shipping_last_name' => ['required', 'string', new NoHtml],
            'shipping_email' => ['required', 'email', new NoHtml],
            'shipping_phone' => ['required', 'string', new NoHtml],
            'address' => ['required', 'string', new NoHtml],
            'state' => ['required', 'string', new NoHtml],
            'post_code' => ['required', 'string', new PolishPostCode]
        ]);

        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'invoice_no' => mt_rand(10000000,99999999),
            'payment_type' => $request->payment_type,
            'total' => $request->total,
            'subtotal' => $request->subtotal,
            'coupon_discount' => $request->coupon_discount,
            'created_at' => Carbon::now(),
        ]);

        $carts = Cart::where('user_ip',request()->ip())->latest()->get();
            foreach ($carts as $cart ) {
          
                OrderItem::insert([
                    'order_id' => $order_id,
                    'product_id' => $cart->product_id,
                    'product_qty' => $cart->qty,
                    'created_at' => Carbon::now(),
                ]);

            }


            Shipping::insert([
                'order_id' => $order_id,
                'shipping_first_name' => $request->shipping_first_name,
                'shipping_last_name' => $request->shipping_last_name,
                'shipping_email' => $request->shipping_email,
                'shipping_phone' => $request->shipping_phone,
                'address' => $request->address,
                'state' => $request->state,
                'post_code' => $request->post_code,
                'created_at' => Carbon::now(),
            ]);

            if (Session::has('coupon')) {
                session()->forget('coupon');
             }

         Cart::where('user_ip',request()->ip())->delete();


            return Redirect()->to('order/success')->with('orderComplete','Zamowienie zostalo zlozone');



    }

    public function orderSuccess(){
        return view('pages.order-complete');
    }
}
