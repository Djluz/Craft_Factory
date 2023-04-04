<div>
    <main class="main" id="bgdashboard">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span>
                    <a href="{{route('user.dashboard')}}" rel="nofollow">My Dashboard</a>
                    <span></span>
                    <a href="{{route('user.orders')}}" rel="nofollow">Orders</a>
                    <span></span> Order Details
                </div>
            </div>
        </div>
        <div class="container pt-30 pb-20" id="bgdashboard">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar pt-20 pb-10">
                        <a href="/user/myaccount">
                            <span class="material-symbols-sharp">grid_view</span>
                            <h6>My Account</h6>
                        </a>
                        <a href="/user/products">
                            <span class="material-symbols-sharp">list_alt</span>
                            <h6>Products</h6>
                        </a>
                        <a href="/user/categories">
                            <span class="material-symbols-sharp">category</span>
                            <h6>Categories</h6>
                        </a>
                        <a href="/user/orders">
                            <span class="material-symbols-sharp">shopping_bag</span>
                            <h6>Orders</h6>
                        </a>
                        {{-- <a href="#">
                            <span class="material-symbols-sharp">barcode</span>
                            <h6>Coupons</h6>
                        </a> --}}
                        <a href="/user/customers">
                            <span class="material-symbols-sharp">support_agent</span>
                            <h6>Customers</h6>
                        </a>
                        <a href="/user/sales">
                            <span class="material-symbols-sharp">paid</span>
                            <h6>Sales</h6>
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="cointainer maindashboard">
                        @auth
                        <h1 class="black">Hello <span class="red">{{ Auth::user()->name }}</span>!</h1>
                        @endauth
                        <div class="insights">
                            <div class="row">

                                <div class="col-sm-4" id="column1">
                                    <div class="sales">
                                        <span class="material-symbols-sharp">analytics</span>
                                        <div class="middle">
                                            <div class="left">
                                                <h3>Customer Ratings</h3>
                                                <div class="product-rate">
                                                    <div class="product-rating" style="width:95%"></div>
                                                </div>
                                                <h1>4.8</h1>
                                                <p class="text-muted fw-light">Last 24 Hours</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-4" id="column1">
                                    <div class="expenses">
                                        <span class="material-symbols-sharp">local_atm</span>
                                        <div class="middle">
                                            <div class="left">
                                                <h3>Total Sales</h3>
                                                <h1>&#x20B1;{{$orders->sum('total')}}</h1>
                                            </div>
                                            <p class="text-muted fw-light">Last 24 Hours</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm" id="column1">
                                    <div class="income">
                                        <span class="material-symbols-sharp">point_of_sale</span>
                                        <div class="middle">
                                            <div class="left">
                                                <h3>Items Sold</h3>
                                                <h1>{{$orderItems->sum('quantity')}}</h1>
                                            </div>
                                            <p class="text-muted fw-light">Last 24 Hours</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End of Insights -->
                    </div>
                </div>
            </div>
            <div class="row">
                <section class="mt-50 mb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2>Order Details</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">

                                        <table class="table shopping-summery text-center clean">
                                            <thead>
                                                <tr class="main-heading">
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Subtotal</th>
                                                    <th scope="col">Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($order->orderItems as $item)
                                                <tr>
                                                    <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/products')}}/{{$item->product->image}}" alt="#"></td>
                                                    <td class="product-des product-name">
                                                        <h5 class="product-name"><a href="#">{{$item->product->name}}</a></h5>

                                                    </td>
                                                    <td class="price" data-title="Price"><span><span>&#8369;</span>{{$item->product->sale_price}}</span></td>
                                                    <td class="text-center" data-title="Stock">
                                                        <h5>{{$item->quantity}}</h5>
                                                    </td>
                                                    <td class="text-right" data-title="Cart">
                                                        <span><span><span>&#8369;</span>{{$item->sale_price * $item->quantity}}</span>
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="border p-md-4 p-30 border-radius cart-totals">
                                        <div class="heading_s1 mb-3">
                                            <h4>Order Summary</h4>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="cart_total_label">Subtotal</td>
                                                        <td class="cart_total_amount"><span class="font-lg fw-900 text-brand"><span>&#8369;</span>{{$order->subtotal}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Tax</td>
                                                        <td class="cart_total_amount"><span class="font-lg fw-900 text-brand"><span>&#8369;</span>{{$order->tax}}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Shipping</td>
                                                        <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="cart_total_label">Total</td>
                                                        <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand"><span>&#8369;</span>{{$order->total}}</span></strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>
</div>

