<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Orders;
use App\Models\OrderItem;

class AdminOrderdetailsComponent extends Component
{
    // public $order_id;
   public $order;

    // public function mount($order_id)
    // {
    //     $this->$order_id = $order_id;
    // }

    public function render()
    {
        $orders = Orders::orderBy('id','DESC')->get();
        $orderItems = OrderItem::orderBy('id','DESC')->get();
        return view('livewire.admin.admin-orderdetails-component',['orders'=>$orders, 'orderItems'=>$orderItems]);
    }
}
