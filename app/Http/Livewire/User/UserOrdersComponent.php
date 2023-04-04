<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Orders;
// use App\Models\OrderItem;

class UserOrdersComponent extends Component
{
    public $order_id;
    public $order;


    public function render()
    {
        // $orderItems = OrderItem::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get();
        $orders = Orders::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get();
        $totalCost = Orders::where('status','!=','cancelled')->where('user_id',Auth::user()->id)->sum('total');
        $totalPurchase = Orders::where('status','!=','cancelled')->where('user_id',Auth::user()->id)->count();
        $totalDelivered = Orders::where('status','=','delivered')->where('user_id',Auth::user()->id)->count();
        $totalCanceled = Orders::where('status','=','cancelled')->where('user_id',Auth::user()->id)->count();
        return view('livewire.user.user-orders-component',['orders'=>$orders, 'totalCost'=>$totalCost, 'totalPurchase'=>$totalPurchase,'totalDelivered'=>$totalDelivered,'totalCanceled'=>$totalCanceled]);
    }
}
