@extends('layout.master')

@section('title')
    Detail Product
@endsection

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Detail Product</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <a class="pt active" href="#product-1">
                                <img src="{{ asset('img/product/product-3.jpg') }}" alt="">
                            </a>
                            <a class="pt" href="#product-2">
                                <img src="{{ asset('img/product/product-4.jpg') }}" alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="{{ asset('img/product/product-5.jpg') }}" alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="{{ asset('img/product/product-7.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="{{ asset('img/product/product-3.jpg') }}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{ asset('img/product/product-4.jpg') }}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="{{ asset('img/product/product-5.jpg') }}" alt="">
                                <img data-hash="product-4" class="product__big__img" src="{{ asset('img/product/product-7.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>Sablon Kaos Tema Jepang <span>Brand: Ravaa Studio</span></h3>
                        {{-- <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>( 138 reviews )</span>
                        </div> --}}
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Category:</span>
                                    <p>Sablon</p>
                                </li>
                                <li>
                                    <span>Condition:</span>
                                    <p>Baru</p>
                                </li>
                                <li>
                                    <span>Material:</span>
                                    <p>Catooon Combed 30s</p>
                                </li>
                                <li>
                                    <span>Size:</span>
                                    <p>XL | L | M | S</p>
                                </li>
                                <li>
                                    <span>Status:</span>
                                    <p class="badge bg-success">Available</p>
                                    <p class="badge bg-danger">Out of Stock</p>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="product__details__price">Rp 92.000 <span>Rp 102.000</span></div>
                        <div class="product__details__button">
                            {{-- <div class="quantity">
                                <span>Quantity:</span>
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div> --}}
                            <a href="#" class="cart-btn"><span class="fa fa-shopping-bag"></span> Link to Shopee</a>
                            <a href="#" class="cart-btn"><span class="fa fa-whatsapp"></span> Chat to Whatsapp</a>
                            {{-- <ul>
                                <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
                            </ul> --}}
                        </div>
                        {{-- <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Availability:</span>
                                    <div class="stock__checkbox">
                                        <label for="stockin">
                                            In Stock
                                            <input type="checkbox" id="stockin">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Available color:</span>
                                    <div class="color__checkbox">
                                        <label for="red">
                                            <input type="radio" name="color__radio" id="red" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="black">
                                            <input type="radio" name="color__radio" id="black">
                                            <span class="checkmark black-bg"></span>
                                        </label>
                                        <label for="grey">
                                            <input type="radio" name="color__radio" id="grey">
                                            <span class="checkmark grey-bg"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Available size:</span>
                                    <div class="size__btn">
                                        <label for="xs-btn" class="active">
                                            <input type="radio" id="xs-btn">
                                            xs
                                        </label>
                                        <label for="s-btn">
                                            <input type="radio" id="s-btn">
                                            s
                                        </label>
                                        <label for="m-btn">
                                            <input type="radio" id="m-btn">
                                            m
                                        </label>
                                        <label for="l-btn">
                                            <input type="radio" id="l-btn">
                                            l
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Promotions:</span>
                                    <p>Free shipping</p>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                                nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                quis, sem.</p>
                            {{-- <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->
@endsection
