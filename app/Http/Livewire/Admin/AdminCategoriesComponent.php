<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Orders;
use App\Models\OrderItem;
use App\Models\Shipping;


class AdminCategoriesComponent extends Component
{
    use WithPagination;
    public $category_id;


    public function deleteCategory()
    {
        $category = Category::find($this->category_id);
        unlink('assets/imgs/categories/'.$category->image);
        $category->delete();
        session()->flash('message','Category has been deleted successfully!');
    }

    public function render()
    {
        $shippings = Shipping::orderBy('id','DESC')->get();
        $orders = Orders::orderBy('created_at','DESC')->get();
        $orderItems = OrderItem::orderBy('id','DESC')->get();
        $categories = Category::orderBy('name','ASC')->paginate(5);
        return view('livewire.admin.admin-categories-component',['shippings'=>$shippings, 'orders'=>$orders, 'orderItems'=>$orderItems,'categories'=>$categories]);
    }
}
