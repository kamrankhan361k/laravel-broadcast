<?php

namespace App\Http\Controllers;
use App\Events\OrderShipped;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ship(Order $order)
    {
        // Ship the order...

        // Fire the event
        event(new OrderShipped($order));

        return 'Order Shipped!';
    }
}
