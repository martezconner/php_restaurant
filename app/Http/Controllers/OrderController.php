<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function orders($type='')
    {      
        if ($type == 'pending') {
        $orders = Order::where('delivered', '0')->get();
      }elseif ($type = 'delivered') {
        $orders = Order::where('delivered', '1')->get();
      }else {
        $orders = Order::all();
      }

      return view('manage.orders', compact('orders'));
    }
}
