<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    public function vieworder($order_id)
    {
        if (Order::where('id', $order_id)->exists())
        {
            $ord = Orderitem::all();
            $orders = Order::find($order_id);
            return view('admin.orders.view', compact('orders','ord'));
        }
        else{
            return redirect()->back()
                ->with('status', 'No Order Found');
        }
    }

    public function proceedorder($order_id)
    {
        if (Order::where('id', $order_id)->exists())
        {
            $order = Order::find($order_id);
            return view('admin.orders.proceed', compact('order'));
        }
        else
        {
            return redirect()->back()
                ->with('status','No Order Found');
        }
    }

    public function trackingstatus(Request $request,$order_id)
    {
        $orders = Order::find($order_id);
        if ($orders->order_status != '2')
        {
            $orders->tracking_msg = $request->input('tracking_msg');
            $orders->update();
            return redirect()->back()->with('status','Tracking status updated');
        }
        else
        {
            return redirect()->back()->with('status','Order is Cancelled');
        }
    }

}
