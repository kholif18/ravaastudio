@extends('admin.layout.master')

@section('title')
    Create Category
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Create Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Categorys</a></li>
                    <li class="breadcrumb-item active">Create Category</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create Category</h5>
                <form class="row g-3">
                    <div class="col-12">
                        <label for="address" class="form-label">Category</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Category">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
