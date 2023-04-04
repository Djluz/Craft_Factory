<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Orders;
use App\Models\OrderItem;

class AdminDashboardComponent extends Component
{
    public $order_id;
    public $order;
    public $orderItem;

    public function render()
    {
        $orders = Orders::orderBy('created_at','DESC')->get();
        $orderItems = OrderItem::orderBy('id','ASC')->get();
        return view('livewire.admin.admin-dashboard-component',['orders'=>$orders, 'orderItems'=>$orderItems]);
    }
}
