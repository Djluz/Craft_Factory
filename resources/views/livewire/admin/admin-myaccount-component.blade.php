<div>
    <main class="main" id="bgdashboard">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span>
                    <a href="{{route('admin.dashboard')}}" rel="nofollow">My Dashboard</a>
                    <span></span> My Account
                </div>
            </div>
        </div>
        <div class="container pt-30 pb-20" id="bgdashboard">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar pt-20 pb-10">
                        <a href="/admin/myaccount">
                            <span class="material-symbols-sharp">grid_view</span>
                            <h6 class="red">My Account</h6>
                        </a>
                        <a href="/admin/products">
                            <span class="material-symbols-sharp">list_alt</span>
                            <h6>Products</h6>
                        </a>
                        <a href="/admin/categories">
                            <span class="material-symbols-sharp">category</span>
                            <h6>Categories</h6>
                        </a>
                        <a href="/admin/orders">
                            <span class="material-symbols-sharp">shopping_bag</span>
                            <h6>Orders</h6>
                        </a>
                        {{-- <a href="#">
                            <span class="material-symbols-sharp">barcode</span>
                            <h6>Coupons</h6>
                        </a> --}}
                        <a href="/admin/customers">
                            <span class="material-symbols-sharp">support_agent</span>
                            <h6>Customers</h6>
                        </a>
                        <a href="/admin/sales">
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
                    <div class="col-lg-10 m-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dashboard-menu" id="tabbackground">
                                    <ul class="nav flex-column" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false"><i class="fi-rs-shopping-cart-check mr-10"></i>Track an Order</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="address-tab" data-bs-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="true"><i class="fi-rs-marker mr-10"></i>My Address</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true"><i class="fi-rs-user mr-10"></i>Account details</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-8">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                                        <div class="card">

                                            <div class="card-header">
                                                <h5 class="mb-0">Orders tracking</h5>
                                            </div>
                                            <div class="card-body contact-from-area">
                                                <p>To track your order please enter your OrderID in the box below and press "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>

                                                <div class="row">
                                                    <div class="col-lg-8">

                                                        <form class="contact-form-style mt-30 mb-50" wire:submit.prevent="trackorder">
                                                            <div class="input-style mb-20">
                                                                <label>Order ID</label>
                                                                <select class="form-control" name="order_id" wire:model="order_id">
                                                                    <option value="" >Select Order ID</option>
                                                                    @foreach($orders as $order)
                                                                        <option value="{{$order->id}}">{{$order->id}} - {{$order->fname}},{{$order->fname}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <button class="submit submit-auto-width" type="submit">Track</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="card mb-3 mb-lg-0">
                                                    <div class="card-header">
                                                        <h5 class="mb-0">Billing/Shipping Address</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        @auth



                                                        <address>{{ Auth::user()->address}}<br>{{ Auth::user()->city}}<br>{{ Auth::user()->province}}<br>{{ Auth::user()->zip}}</address>
                                                        <p>Philippines</p>


                                                        @endauth
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Account Details</h5>
                                            </div>
                                            <div class="card-body">

                                                <p>Type:@if(Auth::user()->utype=='ADM')
                                                    <p>ADMIN</p>
                                                @else
                                                    <p>ADMIN</p>
                                                @endif
                                                <br>
                                                    Name: {{ Auth::user()->fname}} {{ Auth::user()->lname}}<br>
                                                    Email: {{ Auth::user()->email}}<br>
                                                    Password: {{ Auth::user()->password}}<br>


                                                    Account created: {{ Auth::user()->created_at}}<br>
                                                    Account last updated: {{ Auth::user()->updated_at}}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
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

