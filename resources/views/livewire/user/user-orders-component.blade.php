<div>
    <main class="main" id="bgdashboard">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span>
                    <a href="{{route('user.dashboard')}}" rel="nofollow">My Dashboard</a>
                    <span></span> Orders
                </div>
            </div>
        </div>
        <div class="container pt-30 pb-200" id="bgdashboard">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar pt-20 pb-10">
                        <a href="/user/myaccount">
                            <span class="material-symbols-sharp">grid_view</span>
                            <h6>My Account</h6>
                        </a>
                        <a href="/user/orders">
                            <span class="material-symbols-sharp">shopping_bag</span>
                            <h6>Orders</h6>
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
                                                <h3>Total Successful Transaction</h3>

                                                <h1>{{$totalDelivered}}</h1>
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
                                                <h3>Total Cost</h3>
                                                <h1>&#x20B1;{{$totalCost}}</h1>
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
                                                <h3>Total Purchase</h3>
                                                <h1>{{$totalPurchase}}</h1>
                                            </div>
                                            <p class="text-muted fw-light">Last 24 Hours</p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
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
                                                <h2>All Orders</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Date Odered</th>
                                                    <th>Order ID</th>
                                                    <th>Total Cost</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td>{{$order->created_at}}</td>
                                                        <td>{{$order->id}}</td>
                                                        <td>{{$order->total}}</td>
                                                        <td>{{$order->status}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

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

