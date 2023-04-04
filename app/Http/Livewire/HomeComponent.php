<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Cart;


class HomeComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added to Cart');
        $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('shop.cart');
    }

    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-icon-component','refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem)
        {
            if($witem->id==$product_id)
            {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-icon-component','refreshComponent');
                return;
            }
        }
    }


    public function render()
    {
        $lproducts = Product::orderBy('created_at','DESC')->get()->take(10);
        $fproducts = Product::where('featured',1)->inRandomOrder()->get()->take(8);
        $hproducts = Product::where('hot',1)->inRandomOrder()->get()->take(8);
        $sproducts = Product::where('sale',1)->inRandomOrder()->get()->take(8);
        $pcategories = Category::where('is_popular',1)->inRandomOrder()->get()->take(10);
        return view('livewire.home-component',['lproducts'=>$lproducts,'fproducts'=>$fproducts,'hproducts'=>$hproducts,'sproducts'=>$sproducts,'pcategories'=>$pcategories]);
    }
}
