<?php

namespace App\Http\Livewire\Admin;

use App\Models\Shipping;
use Livewire\Component;
use App\Models\Orders;
use App\Models\OrderItem;
use Livewire\Withpagination;
use App\Models\Product;
use App\Models\User;

class AdminCustomerComponent extends Component
{
    use WithPagination;
    public $shipping_id;
    public $user;

    public function render()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        $shippings = Shipping::orderBy('id','DESC')->get();
        $orders = Orders::orderBy('created_at','DESC')->get();
        $orderItems = OrderItem::orderBy('id','DESC')->get();
        $users = User::orderBy('id','DESC')->get();
        return view('livewire.admin.admin-customer-component',['users'=>$users,'shippings'=>$shippings, 'orders'=>$orders, 'orderItems'=>$orderItems, 'products'=>$products]);
    }
}
