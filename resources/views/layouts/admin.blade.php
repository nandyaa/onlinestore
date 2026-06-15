<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
    <div class="row g-0">
        <!-- Sidebar Menu Admin -->
        <div class="p-3 col-lg-3 fixed bg-dark text-white text-center" style="min-height: 100vh;">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav nav-pills flex-column mb-auto">
                <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">- Admin - Products</a></li>
                <li>
                    <a href="{{ route('home.index') }}" class="mt-2 btn btn-primary text-white">Go back to the home
                        page</a>
                </li>
            </ul>
        </div>

        <!-- Konten Utama Admin -->
        <div class="col-lg-9 content-grey d-flex flex-column justify-content-between" style="min-height: 100vh;">
            <!-- Bagian Atas dan Isi Konten diberi Padding agar tidak menempel -->
            <div class="p-4">
                <div class="d-flex justify-content-end align-items-center mb-4 pe-3">
                    <span class="me-2 text-muted fs-5">Admin</span>
                    <img class="rounded-circle border" src="{{ asset('/img/user.png') }}"
                        style="width: 45px; height: 45px; object-fit: cover;">
                </div>

                <div>
                    @yield('content')
                </div>
            </div>

            <!-- FOOTER HITAM MENYATU PADAT (100% SESUAI DENGAN MODUL) -->
            <div class="py-4 text-center text-white bg-dark w-100">
                <div class="container-fluid">
                    <small>
                        Copyright - <b>Daniel Correa</b> - Paola Vallejo
                    </small>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
