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

}
