@extends('admin.layout.master')

@section('title')
    Create Product
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Create Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Create Product</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Product Detail</h5>
                <form>
                    <div class="row mb-3">
                        <label for="img" class="col-sm-2 col-form-label text-end">Image <i class="text-danger">*</i></label>
                        {{-- <div class="col-sm-10">
                            <input type="file" class="file-input" name="img" id="img">
                        </div> --}}
                        <div class="col-sm-10">
                            <div class="file-upload-container">
                                {{-- Image 1 --}}
                                <label for="file-input-1" class="file-label">
                                    <i class="bi bi-camera"></i>
                                    <span>Add Image 1 and as thumbnail</span>
                                </label>
                                <input type="file" id="file-input-1" accept="image/*">
                                <div class="image-preview">
                                    <img id="image-preview" src="" alt="Image Preview">
                                </div>

                                {{-- Image 2 --}}
                                <label for="file-input-2" class="file-label">
                                    <i class="bi bi-camera"></i>
                                    <span>Click here or drag and drop to add Image 2</span>
                                </label>
                                <input type="file" id="file-input-2">

                                {{-- Image 3 --}}
                                <label for="file-input-3" class="file-label">
                                    <i class="bi bi-camera"></i>
                                    <span>Click here or drag and drop to add Image 3</span>
                                </label>
                                <input type="file" id="file-input-3">

                                {{-- Image 4 --}}
                                <label for="file-input-4" class="file-label">
                                    <i class="bi bi-camera"></i>
                                    <span>Click here or drag and drop to add Image 4</span>
                                </label>
                                <input type="file" id="file-input-4">

                                {{-- Image 5 --}}
                                <label for="file-input-5" class="file-label">
                                    <i class="bi bi-camera"></i>
                                    <span>Click here or drag and drop to add Image 5</span>
                                </label>
                                <input type="file" id="file-input-5">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label text-end">Name <i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="brand" class="col-sm-2 col-form-label text-end">Brand <i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="brand" id="brand">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="material" class="col-sm-2 col-form-label text-end">Material <i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="material" id="material">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="size" class="col-sm-2 col-form-label text-end">Size <i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="size" id="size">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-2 col-form-label text-end">Category <i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <select class="form-select" name="category" id="category" aria-label="Floating label select example">
                                <option selected>Banner</option>
                                <option value="1">Sablon</option>
                                <option value="2">Desain</option>
                                <option value="3">Undangan Erba</option>
                                <option value="3">Undangan Falah</option>
                                <option value="3">Undangan Kabinet</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="price" class="col-sm-2 col-form-label text-end">Price <i class="text-danger">*</i></label>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control" name="price" id="price">
                            </div>
                        </div>
                        <label for="price" class="col-sm-2 col-form-label text-end">Discount</label>
                        <div class="col-sm-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Rp</span>
                                <input type="text" class="form-control" name="price" id="price">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="buttonlink1" class="col-sm-2 col-form-label text-end">Link 1 <i class="text-danger">*</i></label>
                        <div class="col-sm-4">
                            <input type="url" class="form-control" name="buttonlink1" id="buttonlink1">
                        </div>
                        <label for="buttonInscription1" class="col-sm-2 col-form-label text-end">Button Inscription</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="buttonInscription1" id="buttonInscription1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="buttonlink2" class="col-sm-2 col-form-label text-end">Link 2 <i class="text-danger">*</i></label>
                        <div class="col-sm-4">
                            <input type="url" class="form-control" name="buttonlink2" id="buttonlink1">
                        </div>
                        <label for="buttonInscription2" class="col-sm-2 col-form-label text-end">Button Inscription</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="buttonInscription2" id="buttonInscription2">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label text-end">Description <i class="text-danger">*</i></label>
                        <div class="col-sm-10">
                            <!-- Quill Editor Default -->
                            <div class="quill-editor-default">
                            </div>
                            <!-- End Quill Editor Default -->
                        </div>
                    </div>
                    </br>
                    </br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dapatkan elemen input file
            var fileInput = document.getElementById('file-input');

            // Dapatkan elemen gambar preview
            var imagePreview = document.getElementById('image-preview');

            // Ketika input file berubah (gambar dipilih)
            fileInput.addEventListener('change', function() {
                var file = fileInput.files[0]; // Dapatkan file yang dipilih

                if (file) {
                    var reader = new FileReader(); // Buat objek FileReader

                    // Ketika file selesai dibaca
                    reader.onload = function(e) {
                        // Setel atribut src pada elemen gambar preview
                        imagePreview.src = e.target.result;
                    };

                    // Baca file sebagai URL data
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush
