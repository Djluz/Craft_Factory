<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\OrderItem;
use App\Models\Orders;

class AdminSalesComponent extends Component
{
    public $orderItem_id;

    

    public function render()
    {
        $orderItems = OrderItem::orderBy('id','DESC')->get();
        $orders = Orders::orderBy('created_at','DESC')->get();
        return view('livewire.admin.admin-sales-component',['orders'=>$orders,'orderItems'=>$orderItems]);
    }
}
