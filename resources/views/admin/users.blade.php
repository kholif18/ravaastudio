@extends('admin.layout.master')

@section('title')
    Users
@endsection

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card top-selling overflow-auto">
            <div class="card-body pb-0">
                <h5 class="card-title">Users</h5>
                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Name</th>
                            <th scope="col">email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>admin</td>
                            <td>Ravaa Studio</td>
                            <td>ravaastudio@gmail.com</td>
                            <td>Administrator</td>
                            <td><a href="{{ url('admin/edit-profile') }}" class="btn btn-success"><i class=" bi bi-pencil-square"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>kholif18</td>
                            <td>Rahmad Nur K. R.</td>
                            <td>rahmadnur.kholifatur@gmail.com</td>
                            <td>Editor</td>
                            <td><a href="{{ url('admin/edit-profile') }}" class="btn btn-success"><i class=" bi bi-pencil-square"></i></a>
                                <button class="btn btn-danger"><i class=" bi bi-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>
        </div>
    </main>
@endsection
