<div>
    <main class="main" id="bgdashboard">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span>
                    <a href="{{route('admin.dashboard')}}" rel="nofollow">My Dashboard</a>
                    <span></span> Products
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
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h2>All Products</h2>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="{{route('admin.product.add')}}" class="btn float-end">Add New Product</a>
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
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Stock</th>
                                                    <th>Regular Price</th>
                                                    <th>Sale Price</th>
                                                    <th>Category</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = ($products->currentPage()-1)*$products->perPage();
                                                @endphp
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td>{{++$i}}</td>
                                                        <td><img src="{{ asset('assets/imgs/products')}}/{{$product->image}}" alt="{{$product->name}}" width="60" /></td>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$product->stock_status}}</td>
                                                        <td>{{$product->regular_price}}</td>
                                                        <td>{{$product->sale_price}}</td>
                                                        <td>{{$product->category->name}}</td>
                                                        <td>{{$product->created_at}}</td>
                                                        <td>
                                                            <a href="{{route('admin.product.edit',['product_id'=>$product->id])}}" class="editaction">Edit</a>
                                                            <a href="#" class="deleteaction text-danger float-end" onclick="deleteConfirmation({{$product->id}})">Delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {{$products->links()}}
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
<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">Do you want to delete this category?</h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteProduct()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id)
        {
            @this.set('product_id',id);
            $('#deleteConfirmation').modal('show');
        }
        function deleteProduct()
        {
            @this.call('deleteProduct');
            $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
