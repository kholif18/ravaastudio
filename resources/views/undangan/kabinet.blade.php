@extends('layout.master')

@section('title')
    Undangan Kabinet
@endsection

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Undangan Kabinet</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row property__gallery">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="product__item">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-1.jpg') }}" alt="Product Image">
                        </a>
                        <div class="product__item__text">
                            <h6><a href="#">New Born 12RS</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">Rp 35.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="product__item">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-2.jpg') }}" alt="Product Image">
                        </a>
                        <div class="product__item__text">
                            <h6><a href="#">Banner New Born</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">Rp 40.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="product__item">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-3.jpg') }}" alt="Product Image">
                        </a>
                        <div class="product__item__text">
                            <h6><a href="#">Cotton T-Shirt</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">Rp 92.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="product__item">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-4.jpg') }}" alt="Product Image">
                        </a>
                        <div class="product__item__text">
                            <h6><a href="#">Sablon Kaos Pendek</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">Rp 90.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="product__item">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-4.jpg') }}" alt="Product Image">
                        </a>
                        <div class="product__item__text">
                            <h6><a href="#">Cetak Kartu</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">Rp 8.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="product__item sale">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-5.jpg') }}" alt="Product Image">
                        </a>
                        <div class="product__item__text">
                            <h6><a href="#">Undangan Alpha 01</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">Rp 1.200 <span>Rp 1.600</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="product__item">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-7.jpg') }}" alt="Product Image">
                        </a>
                        <div class="product__item__text">
                            <h6><a href="#">Pensil Joyko P-88</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">Rp 1.500</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="product__item sale">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-8.jpg') }}" alt="Product Image">
                        </a>
                        <div class="product__item__text">
                            <h6><a href="#">Kaos Kaki SMA Hitam</a></h6>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product__price">Rp 8.000 <span>Rp 12.000</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
