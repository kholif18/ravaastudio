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
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact</h5>
                <form class="row g-3">
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" value="Gedong, Ds. Ngluyu, Kec. Ngluyu.">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" value="Nganjuk">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <label for="state" class="form-label">State of Provice</label>
                        <input type="text" name="state" id="state" class="form-control" value="JAWA TIMUR">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <label for="zip" class="form-label">Zip / Postal Code</label>
                        <input type="number" name="zip" id="zip" class="form-control" value="64452" min="0">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="0822-3337-7761">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Support</label>
                        <input type="email" name="email" id="email" class="form-control" value="ravaastudio@gmail.com">
                    </div>
                    <div class="col-12">
                        <label for="map" class="form-label">Map Url</label>
                        <input type="url" name="map" id="map" class="form-control"
                            value="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.1557661057514!2d111.9591234!3d-7.448013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78314e57a1625b%3A0xc3489dfdef9e5eee!2sRavaa%20Studio!5e0!3m2!1sen!2sid!4v1693754843779!5m2!1sen!2sid">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
