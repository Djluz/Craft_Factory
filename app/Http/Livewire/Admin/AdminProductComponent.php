<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\Withpagination;
use App\Models\Orders;
use App\Models\OrderItem;
use App\Models\Shipping;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $product_id;

    public function deleteProduct()
    {
        $product = Product::find($this->product_id);
        unlink('assets/imgs/products/'.$product->image);
        $product->delete();
        session()->flash('message','Product has been deleted successfully!');
    }

    public function render()
    {
        $shippings = Shipping::orderBy('id','DESC')->get();
        $orders = Orders::orderBy('created_at','DESC')->get();
        $orderItems = OrderItem::orderBy('id','DESC')->get();
        $products = Product::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-product-component',['shippings'=>$shippings, 'orders'=>$orders, 'orderItems'=>$orderItems,'products'=>$products]);
    }
}
