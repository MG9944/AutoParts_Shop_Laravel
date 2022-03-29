<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;
use App\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // =================== Order ==========================
    public function orderIndex(){
        $orders = Order::latest()->get();
        return view('admin.order.index',compact('orders'));
    }

    //view orders //
    public function viewOrder($order_id){
        $order = Order::findOrFail($order_id);
        $orderItems = OrderItem::where('order_id',$order_id)->get();
        $shipping = Shipping::where('order_id',$order_id)->first();
        return view('admin.order.view',compact('order','orderItems','shipping'));
    }

    public function orderDelete($order_id){
        Order::findOrFail($order_id)->delete();
        return Redirect()->back()->with('delete','Zamowienie usuniete');
    }

    // status inactive
    public function Inactive($order_id){
        Order::find($order_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Zamowienie dezaktywowane');
    }

    

}
