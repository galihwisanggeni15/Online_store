<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ '../css/global.css' }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand fs-3 fw-bold" href="{{ route('dashboard') }}">KASIR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="{{ route('dashboard') }}">Dasboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="{{ route('databarang') }}">Data
                            Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page"
                            href="{{ route('pembayaran') }}">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="{{ route('datakategori') }}">Data
                            Kategori</a>
                    </li>
                    @if (session('user')->id_role == '2')
                        <li class="nav-item">
                            <a class="nav-link text-dark" aria-current="page" href="{{ route('laporan') }}">laporan</a>
                        </li>
                    @endif

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
