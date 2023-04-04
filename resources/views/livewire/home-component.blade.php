<div>
    <style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display:block;
        }
        .wishlisted{
            background-color: #FF5757 !important;
            border: 1px solid transparent !important;
        }
        .wishlisted i{
            color: #fff !important;
        }
    </style>
    <main class="main">
        <div class="container-{breakpoint}">
            <div id="sale" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators mb-0">
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="5"></button>
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="6"></button>
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="7"></button>
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="8"></button>
                    <button type="button" data-bs-target="#sale" data-bs-slide-to="9"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#">
                        <img src="assets/imgs/promo/8.png" alt="photo" class="d-block w-100"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <img src="assets/imgs/promo/2.png" alt="photo" class="d-block w-100"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <img src="assets/imgs/promo/3.png" alt="photo" class="d-block w-100"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <img src="assets/imgs/promo/4.png" alt="photo" class="d-block w-100"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <img src="assets/imgs/promo/5.png" alt="photo" class="d-block w-100"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <img src="assets/imgs/promo/6.png" alt="photo" class="d-block w-100"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <img src="assets/imgs/promo/7.png" alt="photo" class="d-block w-100"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <img src="assets/imgs/promo/1.png" alt="photo" class="d-block w-100"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <img src="assets/imgs/promo/9.png" alt="photo" class="d-block w-100"></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                        <img src="assets/imgs/promo/10.png" alt="photo" class="d-block w-100"></a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#sale" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sale" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sale" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sale" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sale" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sale" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sale" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sale" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sale" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        @foreach($pcategories as $pcategory)
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="{{route('product.category',['slug'=>$pcategory->slug])}}"><img src="{{asset('assets/imgs/categories')}}/{{$pcategory->image}}" alt=""></a>
                            </figure>
                            <h5><a href="{{route('product.category',['slug'=>$pcategory->slug])}}">{{$pcategory->name}}</a></h5>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="product-tabs section-padding position-relative wow fadeIn animated">

            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">On Sale</button>
                        </li>
                    </ul>
                    <a href="{{route ('shop')}}" class="view-more d-none d-md-flex">View More<i class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id')
                            @endphp
                            @foreach($fproducts as $fproduct)
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$fproduct->slug])}}">
                                                <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$fproduct->image}}" alt="">
                                                {{-- <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt=""> --}}
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            @if($witems->contains($fproduct->id))
                                                <a aria-label="Remove From Wishlist" class="action-btn hover-up wishlisted" href="#" wire:click.prevent="removeFromWishlist({{$fproduct->id}})"><i class="fi-rs-heart"></i></a>
                                            @else
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="addToWishlist({{$fproduct->id}},'{{$fproduct->name}}',{{$fproduct->sale_price}})"><i class="fi-rs-heart"></i></a>
                                            @endif
                                            {{-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a> --}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="featured">Featured</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="#">{{$fproduct->category->name}}</a>
                                        </div>
                                        <h2><a href="{{route('product.details',['slug'=>$fproduct->slug])}}">{{$fproduct->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span><span>&#8369;</span>{{$fproduct->sale_price}} </span>
                                            {{-- <span class="old-price"><span>&#8369;</span>{{$fproduct->regular_price}}</span> --}}
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$fproduct->id}},'{{$fproduct->name}}',{{$fproduct->sale_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one (Featured)-->
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id')
                            @endphp
                            @foreach($hproducts as $hproduct)
                            <div class="col-lg-3">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$hproduct->slug])}}">
                                                <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$hproduct->image}}" alt="">
                                                {{-- <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt=""> --}}
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            @if($witems->contains($hproduct->id))
                                                <a aria-label="Remove From Wishlist" class="action-btn hover-up wishlisted" href="#" wire:click.prevent="removeFromWishlist({{$hproduct->id}})"><i class="fi-rs-heart"></i></a>
                                            @else
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="addToWishlist({{$hproduct->id}},'{{$hproduct->name}}',{{$hproduct->sale_price}})"><i class="fi-rs-heart"></i></a>
                                            @endif
                                            {{-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a> --}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{route('product.details',['slug'=>$hproduct->slug])}}">{{$hproduct->category->name}}</a>
                                        </div>
                                        <h2><a href="product-details.html">{{$hproduct->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span><span>&#8369;</span>{{$hproduct->sale_price}}</span>
                                            {{-- <span class="old-price"><span>&#8369;</span>{{$hproduct->regular_price}}</span> --}}
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$hproduct->id}},'{{$hproduct->name}}',{{$hproduct->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab two (Popular)-->
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id')
                            @endphp
                            @foreach($sproducts as $sproduct)
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 col-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{route('product.details',['slug'=>$sproduct->slug])}}">
                                                <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$sproduct->image}}" alt="">
                                                {{-- <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt=""> --}}
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            @if($witems->contains($sproduct->id))
                                                <a aria-label="Remove From Wishlist" class="action-btn hover-up wishlisted" href="#" wire:click.prevent="removeFromWishlist({{$sproduct->id}})"><i class="fi-rs-heart"></i></a>
                                            @else
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up" href="#" wire:click.prevent="addToWishlist({{$sproduct->id}},'{{$sproduct->name}}',{{$sproduct->sale_price}})"><i class="fi-rs-heart"></i></a>
                                            @endif
                                            {{-- <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up" href="wishlist.php"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up" href="compare.php"><i class="fi-rs-shuffle"></i></a> --}}
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{route('product.details',['slug'=>$sproduct->slug])}}">{{$sproduct->category->name}}</a>
                                        </div>
                                        <h2><a href="product-details.html">{{$sproduct->name}}</a></h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span><span>&#8369;</span>{{$sproduct->sale_price}}</span>
                                            <span class="old-price"><span class="old-price">&#8369;</span>{{$sproduct->regular_price}}</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up" href="#" wire:click.prevent="store({{$sproduct->id}},'{{$sproduct->name}}',{{$sproduct->regular_price}})"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab three (New added)-->
                </div>
                <!--End tab-content-->
            </div>
        </section>

        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        @foreach($lproducts as $lproduct)
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img1 product-img-zoom">
                                    <a href="{{route('product.details',['slug'=>$lproduct->slug])}}">
                                        <img class="default-img" src="{{ asset('assets/imgs/products')}}/{{$lproduct->image}}" alt="">
                                        {{-- <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt=""> --}}
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    {{-- <a aria-label="Quick view" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up" href="wishlist.php" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up" href="compare.php" tabindex="0"><i class="fi-rs-shuffle"></i></a> --}}
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="{{route('product.details',['slug'=>$lproduct->slug])}}">{{$lproduct->name}}</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span><span>&#8369;</span>{{$lproduct->sale_price}} </span>
                                    @if(($lproduct->sale_price)!=($lproduct->regular_price))
                                        <span class="old-price"><span class="old-price">&#8369;</span>{{$lproduct->regular_price}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!--End product-cart-wrap-2-->
                    </div>
                </div>
            </div>
        </section>
    <div id="about"></div>
    <!-------------------------------About-------------------------------->
    <div class="container-{breakpoint} py-5">
        <div class="about pt-50 pb-3">
            <div class="container mt-5 mb-5">
                <h1 class="text-center mt-50">What is Craft Factory?</h1>
                <div class="row px-4">
                    <div class="col-xl-5" id="photo">
                        <img src="{{asset('assets/imgs/logo/logo1.gif')}}" class="img-fluid">
                    </div>
                    <div class="col-xl d-flex align-items-center" id="small">
                        <h5 class="content1">Craft Factory is the global marketplace for unique and
                            creative products. It's home to a universe of special,
                            extraordinary items, from unique handcrafted pieces to
                            vintage treasures.<br><br>
                            In a time of increasing automation, it's our mission to keep
                            human connection at the heart of commerce. That's why we built
                            a place where creativity lives and thrives because it's
                            powered by people. We help our community of sellers turn
                            their ideas into successful businesses. Our platform
                            connects them with millions of buyers looking for an
                            alternative—something special with a human touch, for
                            those moments in life that deserve imagination.<br><br>
                            As a company, we strive to lead with our guiding principles
                            and to help spread ideas of sustainability and responsibility
                            whose impact can reach far beyond our own business.
                        </h5>

                    </div>
                </div>
                <div class="row pt-2 pb-40" id="abovecontent">
                    <div class="col-md px-4 mb-3">
                        <h5 class="title mb-2">Buy Extraordinary</h5>
                        <p class="content">From the specific to the unexpected (or
                            custom-made), our search tools help buyers explore all the
                            special one-of-a-kind items offered by Craft Factory sellers.</p>
                        <button type="button" class="button mt-0"><a href="{{route('shop')}}" id="buttonhref">Start Shopping</a></button>
                    </div>
                    <div class="col-md px-4 mb-3">
                        <h5 class="title mb-2">Shop Securely</h5>
                        <p class="content">We provide the technology behind the Craft Factory
                            marketplace, helping buyers and sellers connect and exchange on
                            Craft Factory. Keeping those connections safe, fun and secure
                            is our priority, and we're always <a href="/helpcenter" id="link">here to help</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>
</div>
