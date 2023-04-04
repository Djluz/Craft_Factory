<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Orders;
use App\Models\OrderItem;

class UserDashboardComponent extends Component
{
    public $order_id;
    public $order;
    public $orderItem;

    public function render()
    {


        $orders = Orders::orderBy('created_at','DESC')->get();
        $orderItems = OrderItem::orderBy('id','ASC')->get();
        $orders = Orders::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get();
        $totalCost = Orders::where('status','!=','cancelled')->where('user_id',Auth::user()->id)->sum('total');
        $totalPurchase = Orders::where('status','!=','canceled')->where('user_id',Auth::user()->id)->count();
        $totalDelivered = Orders::where('status','=','delivered')->where('user_id',Auth::user()->id)->count();
        $totalCanceled = Orders::where('status','=','canceled')->where('user_id',Auth::user()->id)->count();
        return view('livewire.user.user-dashboard-component',['orders'=>$orders, 'orderItems'=>$orderItems,'totalCost'=>$totalCost,'totalPurchase'=>$totalPurchase,'totalDelivered'=>$totalDelivered,'totalCanceled'=>$totalCanceled]);
    }
}
