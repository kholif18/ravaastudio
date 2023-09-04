@extends('layout.master')

@section('title')
    Home
@endsection

@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg" data-setbg="{{ asset('img/banner/banner-1.jpg') }}">
                        <div class="categories__text">
                            <h1>Banner</h1>
                            <p>Sitamet, consectetur adipiscing elit, sed do eiusmod tempor incidid-unt labore
                                edolore magna aliquapendisse ultrices gravida.</p>
                            <a href="{{ url('/banner') }}">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="{{ asset('img/banner/banner-2.jpg') }}">
                                <div class="categories__text">
                                    <h4>Desain</h4>
                                    <p>358 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="{{ asset('img/banner/banner-3.jpg') }}">
                                <div class="categories__text">
                                    <h4>Sablon</h4>
                                    <p>273 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="{{ asset('img/banner/banner-4.jpg') }}">
                                <div class="categories__text">
                                    <h4>Undangan</h4>
                                    <p>159 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="{{ asset('img/banner/banner-5.jpg') }}">
                                <div class="categories__text">
                                    <h4>Website</h4>
                                    <p>792 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".banner">Banner</li>
                        <li data-filter=".undangan">Undangan</li>
                        <li data-filter=".atk">ATK</li>
                        <li data-filter=".accessories">Accessories</li>
                        <li data-filter=".sablon">Sablon</li>
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix banner">
                    <div class="product__item">
                        <div class="product__item__pic">
                            <a href="{{ url('/detail-product') }}">
                                <img src="{{ asset('img/product/product-1.jpg') }}" alt="Product Image">
                            </a>
                        </div>
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix banner">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix sablon">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix sablon">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix atk">
                    <div class="product__item">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-5.jpg') }}" alt="Product Image">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix undangan">
                    <div class="product__item sale">
                        <a href="{{ url('/detail-product') }}">
                            <img src="{{ asset('img/product/product-6.jpg') }}" alt="Product Image">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix atk">
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 mix accessories">
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

    <!-- Banner Section Begin -->
    <section class="banner set-bg" data-setbg="{{ asset('img/banner/project-banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Website</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Banner</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>The Project Invitation</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->
@endsection
