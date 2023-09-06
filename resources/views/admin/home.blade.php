@extends('admin.layout.master')

@section('title')
    Home
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Home</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Banner</h5>
                <!-- Default Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="banner1-tab" data-bs-toggle="tab" data-bs-target="#banner1" type="button" role="tab" aria-controls="banner1" aria-selected="true">Banner 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="banner2-tab" data-bs-toggle="tab" data-bs-target="#banner2" type="button" role="tab" aria-controls="banner2" aria-selected="false">Banner 2</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="banner3-tab" data-bs-toggle="tab" data-bs-target="#banner3" type="button" role="tab" aria-controls="banner3" aria-selected="false">Banner 3</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="banner4-tab" data-bs-toggle="tab" data-bs-target="#banner4" type="button" role="tab" aria-controls="banner4" aria-selected="false">Banner 4</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="banner5-tab" data-bs-toggle="tab" data-bs-target="#banner5" type="button" role="tab" aria-controls="banner5" aria-selected="false">Banner 5</button>
                    </li>
                </ul>
                <div class="tab-content pt-2" id="myTabContent">
                    <div class="tab-pane fade show active" id="banner1" role="tabpanel" aria-labelledby="banner1-tab">
                        <div class="card-body">
                            <!-- Banner 1 -->
                            <div class="row">
                                <div class="col-lg-9 col-md-9">
                                    <h5 class="card-title">Banner 1</h5>
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label for="titleBanner1" class="form-label">Title</label>
                                            <input type="text" name="titleBanner1" id="titleBanner1" class="form-control" value="Banner">
                                        </div>
                                        <div class="col-12">
                                            <label for="descriptionBanner1" class="form-label">Description</label>
                                            <input type="text" name="descriptionBanner1" id="descriptionBanner1" class="form-control"
                                                value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi doloribus odio fuga.">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <label for="linkbanner1" class="form-label">Link</label>
                                            <input type="url" name="linkbanner1" id="linkbanner1" class="form-control" value="https://web.whatsapp.com">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <label for="buttonType1" class="form-label">Button Inscription</label>
                                            <input type="text" name="buttonType1" id="buttonType1" class="form-control" value="Shop Now">
                                        </div>
                                        <div class="col-12">
                                            <label for="banner1img" class="form-label">Banner Image</label>
                                            <input type="file" name="banner1img" id="banner1img" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <h5 class="card-title">Image</h5>
                                    <img src="{{ asset('img/banner/banner-1.jpg') }}" class="card-img-top" alt="...">
                                    <span>Image size 955 x 638 pixel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="banner2" role="tabpanel" aria-labelledby="banner2-tab">
                        <div class="card-body">
                            <!-- Banner 2 -->
                            <div class="row">
                                <div class="col-lg-9 col-md-9">
                                    <h5 class="card-title">Banner 2</h5>
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label for="titleBanner2" class="form-label">Title</label>
                                            <input type="text" name="titleBanner2" id="titleBanner2" class="form-control" value="Desain">
                                        </div>
                                        <div class="col-12">
                                            <label for="descriptionBanner2" class="form-label">Description</label>
                                            <input type="text" name="descriptionBanner2" id="descriptionBanner2" class="form-control"
                                                value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi doloribus odio fuga.">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <label for="linkbanner2" class="form-label">Link</label>
                                            <input type="url" name="linkbanner2" id="linkbanner2" class="form-control" value="https://web.whatsapp.com">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <label for="buttonType2" class="form-label">Button Inscription</label>
                                            <input type="text" name="buttonType2" id="buttonType2" class="form-control" value="Shop Now">
                                        </div>
                                        <div class="col-12">
                                            <label for="banner2img" class="form-label">Banner Image</label>
                                            <input type="file" name="banner2img" id="banner2img" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <h5 class="card-title">Image</h5>
                                    <img src="{{ asset('img/banner/banner-2.jpg') }}" class="card-img-top" alt="...">
                                    <span>Image Size 472 x 314 pixel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="banner3" role="tabpanel" aria-labelledby="banner3-tab">
                        <div class="card-body">
                            <!-- Banner 3 -->
                            <div class="row">
                                <div class="col-lg-9 col-md-9">
                                    <h5 class="card-title">Banner 3</h5>
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label for="titleBanner3" class="form-label">Title</label>
                                            <input type="text" name="titleBanner3" id="titleBanner3" class="form-control" value="Sablon">
                                        </div>
                                        <div class="col-12">
                                            <label for="descriptionBanner3" class="form-label">Description</label>
                                            <input type="text" name="descriptionBanner3" id="descriptionBanner3" class="form-control"
                                                value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi doloribus odio fuga.">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <label for="linkbanner3" class="form-label">Link</label>
                                            <input type="url" name="linkbanner3" id="linkbanner3" class="form-control" value="https://web.whatsapp.com">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <label for="buttonType3" class="form-label">Button Inscription</label>
                                            <input type="text" name="buttonType3" id="buttonType3" class="form-control" value="Shop Now">
                                        </div>
                                        <div class="col-12">
                                            <label for="banner3img" class="form-label">Banner Image</label>
                                            <input type="file" name="banner3img" id="banner3img" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <h5 class="card-title">Image</h5>
                                    <img src="{{ asset('img/banner/banner-3.jpg') }}" class="card-img-top" alt="...">
                                    <span>Image Size 472 x 314 pixel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="banner4" role="tabpanel" aria-labelledby="banner4-tab">
                        <div class="card-body">
                            <!-- Banner 4 -->
                            <div class="row">
                                <div class="col-lg-9 col-md-9">
                                    <h5 class="card-title">Banner 4</h5>
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label for="titleBanner4" class="form-label">Title</label>
                                            <input type="text" name="titleBanner4" id="titleBanner4" class="form-control" value="Undangan">
                                        </div>
                                        <div class="col-12">
                                            <label for="descriptionBanner4" class="form-label">Description</label>
                                            <input type="text" name="descriptionBanner4" id="descriptionBanner4" class="form-control"
                                                value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi doloribus odio fuga.">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <label for="linkbanner4" class="form-label">Link</label>
                                            <input type="url" name="linkbanner4" id="linkbanner4" class="form-control" value="https://web.whatsapp.com">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <label for="buttonType4" class="form-label">Button Inscription</label>
                                            <input type="text" name="buttonType4" id="buttonType4" class="form-control" value="Shop Now">
                                        </div>
                                        <div class="col-12">
                                            <label for="banner4img" class="form-label">Banner Image</label>
                                            <input type="file" name="banner4img" id="banner4img" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <h5 class="card-title">Image</h5>
                                    <img src="{{ asset('img/banner/banner-4.jpg') }}" class="card-img-top" alt="...">
                                    <span>Image Size 472 x 314 pixel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="banner5" role="tabpanel" aria-labelledby="banner5-tab">
                        <div class="card-body">
                            <!-- Banner 5 -->
                            <div class="row">
                                <div class="col-lg-9 col-md-9">
                                    <h5 class="card-title">Banner 5</h5>
                                    <form class="row g-3">
                                        <div class="col-12">
                                            <label for="titleBanner5" class="form-label">Title</label>
                                            <input type="text" name="titleBanner5" id="titleBanner5" class="form-control" value="Undangan">
                                        </div>
                                        <div class="col-12">
                                            <label for="descriptionBanner5" class="form-label">Description</label>
                                            <input type="text" name="descriptionBanner5" id="descriptionBanner5" class="form-control"
                                                value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi doloribus odio fuga.">
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <label for="linkbanner5" class="form-label">Link</label>
                                            <input type="url" name="linkbanner5" id="linkbanner5" class="form-control" value="https://web.whatsapp.com">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <label for="buttonType5" class="form-label">Button Inscription</label>
                                            <input type="text" name="buttonType5" id="buttonType5" class="form-control" value="Shop Now">
                                        </div>
                                        <div class="col-12">
                                            <label for="banner5img" class="form-label">Banner Image</label>
                                            <input type="file" name="banner5img" id="banner5img" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <h5 class="card-title">Image</h5>
                                    <img src="{{ asset('img/banner/banner-5.jpg') }}" class="card-img-top" alt="...">
                                    <span>Image Size 472 x 314 pixel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Default Tabs -->
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Promo Banner</h5>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="promobanner1-tab" data-bs-toggle="tab" data-bs-target="#promobanner1" type="button" role="tab" aria-controls="promobanner1" aria-selected="true">Promo
                            Banner 1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="promobanner2-tab" data-bs-toggle="tab" data-bs-target="#promobanner2" type="button" role="tab" aria-controls="promobanner2" aria-selected="false">Promo Banner
                            2</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="promobanner3-tab" data-bs-toggle="tab" data-bs-target="#promobanner3" type="button" role="tab" aria-controls="promobanner3" aria-selected="false">Promo Banner
                            3</button>
                    </li>
                </ul>
                <div class="tab-content pt-2 row" id="myTabContent">
                    <div class="tab-pane fade show active col-lg-9 col-md-9" id="promobanner1" role="tabpanel" aria-labelledby="promobanner1-tab">
                        <div class="card-body">
                            <!-- Promo Banner 1 -->
                            <h5 class="card-title">Promo Banner 1</h5>
                            <form class="row g-3">
                                <div class="col-12">
                                    <label for="titlePromoBanner1" class="form-label">Title</label>
                                    <input type="text" name="titlePromoBanner1" id="titlePromoBanner1" class="form-control" value="The Cloe Collection">
                                </div>
                                <div class="col-12">
                                    <label for="hightlight1" class="form-label">Highlight</label>
                                    <input type="text" name="hightlight1" id="hightlight1" class="form-control" value="The Project Website">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <label for="linkPromoBanner1" class="form-label">Link</label>
                                    <input type="url" name="linkPromoBanner1" id="linkPromoBanner1" class="form-control" value="https://web.whatsapp.com">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="buttonPromoIns1" class="form-label">Button Inscription</label>
                                    <input type="text" name="buttonPromoIns1" id="buttonPromoIns1" class="form-control" value="Shop Now">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade col-lg-9 col-md-9" id="promobanner2" role="tabpanel" aria-labelledby="promobanner2-tab">
                        <div class="card-body">
                            <!-- Promo Banner 2 -->
                            <h5 class="card-title">Promo Banner 2</h5>
                            <form class="row g-3">
                                <div class="col-12">
                                    <label for="titleBanner2" class="form-label">Title</label>
                                    <input type="text" name="titleBanner2" id="titleBanner2" class="form-control" value="Desain">
                                </div>
                                <div class="col-12">
                                    <label for="descriptionBanner2" class="form-label">Description</label>
                                    <input type="text" name="descriptionBanner2" id="descriptionBanner2" class="form-control"
                                        value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi doloribus odio fuga.">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <label for="linkbanner2" class="form-label">Link</label>
                                    <input type="url" name="linkbanner2" id="linkbanner2" class="form-control" value="https://web.whatsapp.com">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="buttonType2" class="form-label">Button Inscription</label>
                                    <input type="text" name="buttonType2" id="buttonType2" class="form-control" value="Shop Now">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade col-lg-9 col-md-9" id="promobanner3" role="tabpanel" aria-labelledby="promobanner3-tab">
                        <div class="card-body">
                            <!-- Promo Banner 3 -->
                            <h5 class="card-title">Promo Banner 3</h5>
                            <form class="row g-3">
                                <div class="col-12">
                                    <label for="titleBanner3" class="form-label">Title</label>
                                    <input type="text" name="titleBanner3" id="titleBanner3" class="form-control" value="Sablon">
                                </div>
                                <div class="col-12">
                                    <label for="descriptionBanner3" class="form-label">Description</label>
                                    <input type="text" name="descriptionBanner3" id="descriptionBanner3" class="form-control"
                                        value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi doloribus odio fuga.">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <label for="linkbanner3" class="form-label">Link</label>
                                    <input type="url" name="linkbanner3" id="linkbanner3" class="form-control" value="https://web.whatsapp.com">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <label for="buttonType3" class="form-label">Button Inscription</label>
                                    <input type="text" name="buttonType3" id="buttonType3" class="form-control" value="Shop Now">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body col-lg-3 col-md-3">
                        <h5 class="card-title">Image Banner</h5>
                        <form action="" class="row g-3">
                            <div class="col-12">
                                <img src="{{ asset('img/banner/project-banner.jpg') }}" class="card-img-top" alt="...">
                                <span>image size 1920 x 500 px</span>
                            </div>
                            <div class="col-12">
                                <input type="file" name="banner3img" id="banner3img" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div><!-- End Default Tabs -->
            </div>
        </div>
    </main>
@endsection
