<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Orders;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Product;



class AdminMyaccountComponent extends Component
{
    public $order_id;
    public $order;
    public $search_term;
    public $t;
    public $status;



    public function trackorder()
    {
        $this->validate([
            'order_id'=>'required',

        ]);

        session()->flash('message','You will receive an email shortly regarding the status of your order');
    }

    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        $shippings = Shipping::orderBy('id','DESC')->get();
        $orders = Orders::orderBy('created_at','DESC')->get();
        $orderItems = OrderItem::orderBy('id','DESC')->get();
        return view('livewire.admin.admin-myaccount-component',['shippings'=>$shippings, 'orders'=>$orders, 'orderItems'=>$orderItems, 'products'=>$products]);
    }
}
