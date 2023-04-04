<?php

namespace App\Http\Livewire\Admin;

use App\Models\OrderItem;
use Livewire\Component;
use App\Models\Orders;

class AdminOrdersComponent extends Component
{
    public $order_id;
    public $order;



    public function render()
    {
        $orders = Orders::orderBy('created_at','DESC')->get();
        $orderItems = OrderItem::orderBy('id','DESC')->get();
        return view('livewire.admin.admin-orders-component',['orders'=>$orders, 'orderItems'=>$orderItems]);
    }
}
