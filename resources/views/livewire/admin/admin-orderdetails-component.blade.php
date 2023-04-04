<div>
    <main class="main" id="bgdashboard">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span>
                    <a href="{{route('admin.dashboard')}}" rel="nofollow">My Dashboard</a>
                    <span></span>
                    <a href="{{route('admin.orders')}}" rel="nofollow">Orders</a>
                    <span></span> Order Details
                </div>
            </div>
        </div>
        <div class="container pt-30 pb-20" id="bgdashboard">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar pt-20 pb-10">
                        <a href="/admin/myaccount">
                            <span class="material-symbols-sharp">grid_view</span>
                            <h6>My Account</h6>
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
                            <div class="col-md-12">
                                <div class="panel-heading">
                                    Ordered Items
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-heading">
                                    Billing/Shipping
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel-heading">
                                    Transactions
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>
</div>
