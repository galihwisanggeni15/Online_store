<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD

=======
>>>>>>> 82d1a060279033468f2a948b86c4b4ccc633edbe
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD

    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <title></title>
</head>

=======
    
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <title></title>
</head>
>>>>>>> 82d1a060279033468f2a948b86c4b4ccc633edbe
<body>
    <div class="header">
        <div id="navSamping" class="navSamping">
            <button class="btn-nav" onclick="toggleSidebar()">
                <i id="chevronIcon" class="fa-solid fa-chevron-right"></i>
            </button>
            @php
                $currentPage = request()->segment(2); // Mendapatkan segment kedua dari URL, misal: isi/dashboard
            @endphp
<<<<<<< HEAD
            <a href="{{ route('dashboard') }}" class="navbar @if ($currentPage == 'dashboard') active @endif">
=======
            <a href="{{ url('isi/dashboard') }}" class="navbar @if($currentPage == 'dashboard') active @endif">
>>>>>>> 82d1a060279033468f2a948b86c4b4ccc633edbe
                <div class="grubheader">
                    <span><i class="fa-solid fa-house"></i></span>
                </div>
                <div class="h4">Dashboard</div>
            </a>
<<<<<<< HEAD
            <a href="{{ route('pembayaran') }}" class="navbar @if ($currentPage == 'pembayaran') active @endif">
=======
            <a href="#" class="navbar @if($currentPage == 'pembayaran') active @endif">
>>>>>>> 82d1a060279033468f2a948b86c4b4ccc633edbe
                <div class="grubheader">
                    <span><i class="fa-solid fa-cart-plus"></i></span>
                </div>
                <div class="h4">Pembayaran</div>
            </a>
<<<<<<< HEAD
            <a href="{{ route('databarang') }}" class="navbar @if ($currentPage == 'dataproduk') active @endif">
                <div class="grubheader">
                    <span><i class="fa-solid fa-download"></i></span>
                </div>
                <div class="h4">Data Barang</div>
            </a>
            <a href="{{ route('datakategori') }}" class="navbar @if ($currentPage == 'datamember') active @endif">
                <div class="grubheader">
                    <span><i class="fa-solid fa-users"></i></span>
                </div>
                <div class="h4">Data Kategori</div>
            </a>
            <a href="{{ route('laporan') }}" class="navbar @if ($currentPage == 'laporan') active @endif">
=======
            <a href="{{ url('isi/dataproduk') }}" class="navbar @if($currentPage == 'dataproduk') active @endif">
                <div class="grubheader">
                    <span><i class="fa-solid fa-download"></i></span>
                </div>
                <div class="h4">Data Produk</div>
            </a>
            <a href="{{ url('isi/datamember') }}" class="navbar @if($currentPage == 'datamember') active @endif">
                <div class="grubheader">
                    <span><i class="fa-solid fa-users"></i></span>
                </div>
                <div class="h4">Data Member</div>
            </a>
            <a href="{{ url('isi/laporan') }}" class="navbar @if($currentPage == 'laporan') active @endif">
>>>>>>> 82d1a060279033468f2a948b86c4b4ccc633edbe
                <div class="grubheader">
                    <span><i class="fa-solid fa-book"></i></span>
                </div>
                <div class="h4">Laporan</div>
            </a>
        </div>
    </div>
<<<<<<< HEAD



    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById('navSamping');
            var chevronIcon = document.getElementById('chevronIcon');

            sidebar.classList.toggle('open');
            chevronIcon.classList.toggle('open');
        }
    </script>
    <script src="{{ asset('js/jees.js') }}"></script>
</body>

</html>
=======
    


<script>
function toggleSidebar() {
    var sidebar = document.getElementById('navSamping');
    var chevronIcon = document.getElementById('chevronIcon');

    sidebar.classList.toggle('open');
    chevronIcon.classList.toggle('open');
}

</script>
<script src="{{asset('js/jees.js')}}"></script>
</body>
</html>
>>>>>>> 82d1a060279033468f2a948b86c4b4ccc633edbe
