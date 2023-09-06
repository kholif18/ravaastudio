@extends('admin.layout.master')

@section('title')
    Product List
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Product List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Product List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <h5 class="card-title">Product List</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Preview</th>
                            <th scope="col">Product</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td><a href="#"><img style="height: 70px" src="{{ asset('img/product/product-1.jpg') }}" alt=""></a></td>
                            <td>Brandon Jacob</td>
                            <td>Designer</td>
                            <td>28</td>
                            <td>2016-05-25</td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td><a href="#"><img style="height: 70px" src="{{ asset('img/product/product-2.jpg') }}" alt=""></a></td>
                            <td>Brandon Jacob</td>
                            <td>Banner</td>
                            <td>28</td>
                            <td>2016-05-25</td>
                        </tr>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>
        </div>
    </main>
@endsection
