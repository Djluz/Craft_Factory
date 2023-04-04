<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Orders;

class UserOrderdetailsComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
    {
        $order = Orders::find($this->order_id);
        return view('livewire.user.user-orderdetails-component',['order'=>$order]);
    }
}
