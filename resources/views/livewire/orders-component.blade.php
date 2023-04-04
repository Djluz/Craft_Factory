<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> My Dashboard
                </div>
            </div>
        </div>
        <div class="body1">
            <div class="container" id="cont">
                <aside class="mt-30">
                    

                    <div class="sidebar pt-30">
                        <a href="/myaccount">
                            <span class="material-symbols-sharp">grid_view</span>
                            <h3>My Account</h3>
                        </a>
                        <a href="/admin/products">
                            <span class="material-symbols-sharp">list_alt</span>
                            <h3>Products</h3>
                        </a>
                        <a href="/admin/categories">
                            <span class="material-symbols-sharp">category</span>
                            <h3>Categories</h3>
                        </a>
                        <a href="/orders">
                            <span class="material-symbols-sharp">shopping_bag</span>
                            <h3>Orders</h3>
                        </a>
                        <a href="#">
                            <span class="material-symbols-sharp">barcode</span>
                            <h3>Coupons</h3>
                        </a>
                        <a href="#">
                            <span class="material-symbols-sharp">support_agent</span>
                            <h3>Customers</h3>
                        </a>
                        <a href="#">
                            <span class="material-symbols-sharp">paid</span>
                            <h3>Sales</h3>
                        </a>
                    </div>
                </aside>

                <!-- End of aside -->

                <main class="">
                    @auth
                    <h1 class="black">Hello <span class="red">{{ Auth::user()->name }}</span>!</h1>
                    @endauth
                    <div class="insights">
                        <div class="sales">
                            <span class="material-symbols-sharp">analytics</span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Customer Ratings</h3>
                                    <div class="product-rate">
                                        <div class="product-rating" style="width:95%"></div>
                                    </div>
                                    <h1>4.8</h1>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx="38" cy="38" r="36">
                                    </svg>
                                    <div class="number">
                                        <p>96%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <!-- End of Sales -->
                        <div class="expenses">
                            <span class="material-symbols-sharp">local_atm</span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Total Sales</h3>
                                    <h1>&#x20B1;53,094</h1>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx="38" cy="38" r="36">
                                    </svg>
                                    <div class="number">
                                        <p>62%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <!-- End of Expenses -->
                        <div class="income">
                            <span class="material-symbols-sharp">point_of_sale</span>
                            <div class="middle">
                                <div class="left">
                                    <h3>Items Sold</h3>
                                    <h1>834</h1>
                                </div>
                                <div class="progress">
                                    <svg>
                                        <circle cx="38" cy="38" r="36">
                                    </svg>
                                    <div class="number">
                                        <p>44%</p>
                                    </div>
                                </div>
                            </div>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <!-- End of Income -->
                    </div>
                    <!-- End of Insights -->
                    <div class="recent-orders">
                        <h2>Recent Orders</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Product Number</th>
                                    <th>Payment Status</th>
                                    <th>Shipping Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DGJN1258</td>
                                    <td>CF96462</td>
                                    <td class="danger">Refunded</td>
                                    <td class="danger">Cancelled</td>
                                </tr>
                                <tr>
                                    <td>DGJN1269</td>
                                    <td>CF96411</td>
                                    <td class="primary">Completed</td>
                                    <td class="warning">For Delivery</td>
                                </tr>
                                <tr>
                                    <td>DGJN1271</td>
                                    <td>CF96412</td>
                                    <td class="primary">Completed</td>
                                    <td class="warning">For Delivery</td>
                                </tr>
                                <tr>
                                    <td>DGJN1275</td>
                                    <td>CF96413</td>
                                    <td class="primary">Completed</td>
                                    <td class="primary">Delivered</td>
                                </tr>
                                <tr>
                                    <td>DGJN1279</td>
                                    <td>CF96414</td>
                                    <td class="primary">Completed</td>
                                    <td class="primary">Delivered</td>
                                </tr>
                                <tr>
                                    <td>DGJN1280</td>
                                    <td>CF96415</td>
                                    <td class="primary">Completed</td>
                                    <td class="primary">Delivered</td>
                                </tr>
                                <tr>
                                    <td>DGJN1283</td>
                                    <td>CF96416</td>
                                    <td class="primary">Completed</td>
                                    <td class="primary">Delivered</td>
                                </tr>
                                <tr>
                                    <td>DGJN1299</td>
                                    <td>CF96417</td>
                                    <td class="primary">Completed</td>
                                    <td class="primary">Delivered</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                </main>

            </div>
        </div>
    </main>
</div>
