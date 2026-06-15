@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')

    <div class="container-fluid">

        <div class="row">

            <!-- SIDEBAR -->
            <div class="col-md-3 p-0" style="background:#07162f; min-height:100vh;">

                <div class="p-4">

                    <h1 class="text-info fw-bold mb-5">
                        Admin Panel
                    </h1>

                    <a href="#" class="btn btn-dark w-100 text-start mb-3 p-3 border-0"
                        style="background:#0d1b3d; border-radius:15px;">

                        📊 Dashboard Home

                    </a>

                    <a href="{{ url('/admin/products') }}" class="btn w-100 text-start p-3 text-white"
                        style="background:#0dc9a6; border-radius:15px;">

                        📦 Manage Products

                    </a>

                </div>

            </div>

            <!-- CONTENT -->
            <div class="col-md-9 bg-light">

                <!-- TOPBAR -->
                <div class="d-flex justify-content-end align-items-center p-4 bg-white shadow-sm">

                    <span class="badge bg-success fs-6 me-3">
                        Store Owner
                    </span>

                    <h4 class="fw-bold me-3 mb-0">
                        Admin Nandya
                    </h4>

                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="55">

                </div>

                <!-- FORM CARD -->
                <div class="container mt-5">

                    <div class="card border-0 shadow rounded-4 p-4">

                        <h2 class="fw-bold mb-4">
                            ➕ Create New Product
                        </h2>

                        <form>

                            <div class="row">

                                <div class="col-md-6 mb-4">

                                    <label class="fw-bold mb-2">
                                        Product Name
                                    </label>

                                    <input type="text" class="form-control p-3" value="Laptop">

                                </div>

                                <div class="col-md-6 mb-4">

                                    <label class="fw-bold mb-2">
                                        Price (USD)
                                    </label>

                                    <input type="text" class="form-control p-3" value="$2000">

                                </div>

                            </div>

                            <div class="mb-4">

                                <label class="fw-bold mb-2">
                                    Product Image
                                </label>

                                <input type="file" class="form-control p-3">

                            </div>

                            <div class="mb-4">

                                <label class="fw-bold mb-2">
                                    Description
                                </label>

                                <textarea class="form-control p-3" rows="5" placeholder="Describe your premium product..."></textarea>

                            </div>

                            <button class="btn btn-success px-5 py-3 fw-bold">
                                Save Product
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
