<?php

namespace App\Http\Livewire;

use App\Models\Orders;
use App\Models\OrderItem;
use App\Models\Shipping;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Cart;


class CheckoutComponent extends Component
{
    public $fname;
    public $lname;
    public $address;
    public $city;
    public $province;
    public $zip;
    public $phone;
    public $email;
    public $ordernotes;

    // public $paymentmode;
    public $thankyou;



    public function placeOrder()
    {
        $this->validate([
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required',
            'city'=>'required',
            'province'=>'required',
            'zip'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'ordernotes'=>'required',
            // 'paymentmode'=>'required'

        ]);

        $order = new Orders();
        $order->user_id = Auth::user()->id;
        $order->subtotal = Cart::instance('cart')->subtotal();
        $order->discount = 0;
        $order->tax = Cart::instance('cart')->tax();
        $order->sf = 0;
        $order->total = Cart::instance('cart')->total();
        $order->fname = $this->fname;
        $order->lname = $this->lname;
        $order->address = $this->address;
        $order->city = $this->city;
        $order->province = $this->province;
        $order->zip = $this->zip;
        $order->phone = $this->phone;
        $order->email = $this->email;
        $order->ordernotes = $this->ordernotes;
        $order->status = 'ordered';
        $order->save();
        // session()->flash('message','You have successfully placed your order!');


        $shipping = new Shipping();
        $shipping->order_id = $order->id;
        $shipping->fname = $this->fname;
        $shipping->lname = $this->lname;
        $shipping->address = $this->address;
        $shipping->city = $this->city;
        $shipping->province = $this->province;
        $shipping->zip = $this->zip;
        $shipping->phone = $this->phone;
        $shipping->email = $this->email;
        $shipping->ordernotes = $this->ordernotes;
        $shipping->save();


        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->order_id = $order->id;
        $transaction->mode = 'cod';
        $transaction->status = 'pending';
        $transaction->save();

        foreach(Cart::instance('cart')->content() as $item)
        {
            $orderItem = new OrderItem();
            $orderItem->product_id = $item->id;
            $orderItem->order_id = $order->id;
            $orderItem->price = $item->price;
            $orderItem->quantity = $item->qty;
            $orderItem->save();
        }





            // $transaction = new Transaction();
            // $transaction->user_id = Auth::user()->id;
            // $transaction->order_id = $order->id;
            // $transaction->mode = 'cod';
            // $transaction->status = 'pending';
            // $transaction->save();


       $this->thankyou = 1;
        Cart::instance('cart')->destroy();
        session()->forget('checkout');


    }

        public function verifyForCheckout()
        {
            if(!Auth::check())
            {
                return redirect()->route('login');
            }
            else if($this->thankyou)
            {
                return redirect()->route('shop.thankyou');
            }
            else if(!session()->get('checkout'))
            {
                return redirect()->route('shop.cart');
            }
        }


    // public function verifyForCheckout()
    // {
    //     if(Auth::check())
    //     {
    //         return redirect()->route('shop.thankyou');
    //     }
    //     else
    //     {
    //         return redirect()->route('login');
    //     }
    // }

    public function render()
    {
        $this->verifyForCheckout();

        return view('livewire.checkout-component');
    }
}


        // $order->subtotal = session()->get('checkout')['subtotal'];
        // $order->tax = session()->get('checkout')['tax'];
        // $order->sf = 'free delivery';
        // $order->total = session()->get('checkout')['total'];
