<div>
    <style>
        #text1{
            background-image: url(assets/imgs/payment.png);
            background-position: right;
            padding-right:20px;
            background-size: 150px;
            background-repeat:no-repeat;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> <a href="/shop" rel="nofollow">Shop</a>
                    <span></span> Checkout
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                @endif
                <div class="row">
                    <div class="col-lg-6 mb-sm-15">
                        @auth
                            <ul>
                                <div class="toggle_info">
                                    <span><i class="fi-rs-user mr-10"></i><span class="text-muted">Hello</span><a href="{{ route('login')}}" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">{{' '}} {{ Auth::user()->name }}!!!</a></span>
                                    <span class="text-muted">You're now ready to Checkout!</span>
                                </div>
                            </ul>
                            @else
                            <ul>
                                <div class="toggle_info">
                                    <span><i class="fi-rs-user mr-10"></i><span class="text-muted">Already have an account?</span> <a href="{{ route('login')}}">Click here to login</a></span>
                                </div>
                            </ul>
                        @endif

                    </div>
                    <div class="col-lg-6">
                        <div class="toggle_info">
                            <span><i class="fi-rs-label mr-10"></i><span class="text-muted">Have a coupon?</span> <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                        </div>
                        <div class="panel-collapse collapse coupon_form " id="coupon">
                            <div class="panel-body">
                                <p class="mb-30 font-sm">If you have a coupon code, please apply it below.</p>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Coupon Code...">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn  btn-md" name="login">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="divider mt-50 mb-50"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form wire:submit.prevent="placeOrder">
                            <div class="mb-25">
                                <h4>Shipping Details</h4>
                            </div>
                            <div class="form-group">
                                <input type="text" required="" name="fname" placeholder="First name *" wire:model="fname" required>
                                @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" required="" name="lname" placeholder="Last name *"  wire:model="lname" required>
                                @error('lname') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" required="" placeholder="Address *"  wire:model="address" required>
                                @error('address') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="city" placeholder="City / Town *"  wire:model="city" required>
                                @error('city') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="province" placeholder="Province/Region *"  wire:model="province" required>
                                @error('province') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="zip" placeholder="Postalcode / ZIP *" wire:model="zip" required>
                                @error('zip') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input required="" type="text" name="phone" placeholder="Phone *" wire:model="phone" required>
                                @error('phone') <span class="text-danger">{{$message}}</span> @enderror</div>
                            <div class="form-group">
                                <input required="" type="text" name="email" placeholder="Email address *" wire:model="email" required>
                                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-20">
                                <h5>Additional information</h5>
                            </div>
                            <div class="form-group mb-30">
                                <textarea rows="5" placeholder="Order notes" wire:model="ordernotes"></textarea>
                                @error('ordernotes') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="mb-20">
                                <h5>Mode of Payment</h5>
                            </div>
                            <div class="form-group mb-30">
                                <select class="form-control" name="paymentmode" wire:model="paymentmode">
                                    <option value="0" >COD</option>
                                    <option value="1" disabled>Debit/Credit Card</option>
                                </select>
                                @error('paymentmode')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                            {{-- <div class="payment_method">
                                <div class="mb-25">
                                    <h5>Payment</h5>
                                </div>
                                <div class="payment_option">
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="paymentmode" id="exampleRadios3" value="cod" wire:model="paymentmode">
                                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cod" aria-controls="cod" aria-expanded="false" href="#cod">Cash On Delivery</label>
                                        <div class="panel-collapse collapse coupon_form " id="cod">
                                            <div class="panel-body">
                                                <span class="payment-desc">Order now Pay on Delivery</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custome-radio">
                                        <input class="form-check-input" required="" type="radio" name="paymentmode" id="exampleRadios4" value="card" wire:model="paymentmode">
                                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#card" aria-controls="card" aria-expanded="false" href="#card">Card Payment</label>
                                    </div>
                                    <div class="panel-collapse collapse coupon_form " id="card">
                                        <div class="panel-body">
                                            <h5 class="mb-30 font-sm">Enter Card Details</h5>
                                            <form method="post">
                                                <div class="form-group">
                                                    <input type="text" id="text1" placeholder="Card Number" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Expiry MM/YY" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="CVC" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Name on Card" required>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    @error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div> --}}
                            <button type="submit" class="btn btn-fill-out btn-block mt-30 mb-30" >Place Order Now</button>
                        </form>
                    </div>

                    <div class="col-md">
                        <div class="order_review">
                            <div class="mb-20">
                                <h4>Your Orders</h4>
                            </div>
                            <div class="table-responsive order_table text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(Cart::instance('cart')->content() as $item)
                                        <tr>
                                            <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products')}}/{{$item->model->image}}" alt="#"></td>
                                            <td>
                                                <h5><a href="#">{{$item->model->name}}</a></h5> <span class="product-qty">x {{$item->qty}}</span>
                                            </td>
                                            <td><span><span>&#8369;</span>{{$item->subtotal}}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <th>SubTotal</th>
                                            <td class="product-subtotal" colspan="2"><span>&#8369;</span>{{Cart::instance('cart')->subtotal()}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tax</th>
                                            <td class="product-subtotal" colspan="2"><span>&#8369;</span>{{Cart::instance('cart')->tax()}}</td>
                                        </tr>
                                        <tr>
                                            <th>Shipping</th>
                                            <td colspan="2"><em>Free Shipping</em></td>
                                        </tr>
                                        <tr>
                                            <th>Total</th>
                                            <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900"><span>&#8369;</span>{{Cart::instance('cart')->total()}}</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
</div>
