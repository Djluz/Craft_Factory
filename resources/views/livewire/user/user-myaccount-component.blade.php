<div>
    <main class="main" id="bgdashboard">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span>
                    <a href="{{route('user.dashboard')}}" rel="nofollow">My Dashboard</a>
                    <span></span> My Account
                </div>
            </div>
        </div>
        <div class="container pt-30 " id="bgdashboard">
            <div class="row">
                <div class="col-md-3 pb-100">
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
                                                                                <input name="order-id" placeholder="Found in your order confirmation email" type="text" class="square" required wire:model="order_id">
                                                                            </div>
                                                                            <div class="input-style mb-20">
                                                                                <label>Billing email</label>
                                                                                <input name="email" placeholder="Email you used during checkout" type="email" class="square" required wire:model="email">
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
                                                                    <p>USER</p>
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
                        <!-- End of Insights -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

