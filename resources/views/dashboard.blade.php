<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="#" class="logo"><img width="150" src="{{ asset('img/pithik.png') }}"></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <h2>Voucher Claim</h2>
        
        <a href="#" class="h-btn">History</a>
    </header>

    <section class="container-voucher" id="container-voucher">
        <div class="category-voucher">
            <h2><span>Kategori</span></h2>
            <div class="category-count">
                <p>Kategori 1</p>
                <p>3</p>
            </div>
            <div class="category-count">
                <p>Kategori 1</p>
                <p>3</p>
            </div>
            <div class="category-count">
                <p>Kategori 1</p>
                <p>3</p>
            </div>
            <div class="category-count">
                <p>Kategori 1</p>
                <p>3</p>
            </div>

            <a href="{{ route('logout') }}">LOG OUT </a>
        </div>
        <div class="voucher-claim">
            <h2><span>Voucher Claim</span></h2>
            <div class="voucher-detail">
                <div class="voucher-card">
                    <img src="{{ asset('img/reading_book.jpg') }}" width="100">
                    <div class="voucher-text">
                        <p>DISCOUNT 40%</p>
                        <a href="#" class="btn">CLAIM</a>
                    </div>
                </div>
                <div class="voucher-card">
                    <img src="{{ asset('img/reading_book.jpg') }}" width="150">
                    <div class="voucher-text">
                        <p>DISCOUNT 40%</p>
                        <a href="#" class="btn">CLAIM</a>
                    </div>
                </div>
                <div class="voucher-card">
                    <img src="{{ asset('img/reading_book.jpg') }}" width="150">
                    <div class="voucher-text">
                        <p>DISCOUNT 40%</p>
                        <a href="#" class="btn">CLAIM</a>
                    </div>
                </div>
                <div class="voucher-card">
                    <img src="{{ asset('img/reading_book.jpg') }}" width="150">
                    <div class="voucher-text">
                        <p>DISCOUNT 40%</p>
                        <a href="#" class="btn">CLAIM</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-voucher" id="section-voucher">
        <div class="home-text">
            <table border="1">
                <tr>
                    <td>Nama</td>
                    <td>Kategori</td>
                </tr>

                @foreach ($data as $d)
                <tr>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->kategori}} </td>
                </tr>
                    
                @endforeach
            </table>

            <a href="{{ route('logout') }}">LOG OUT </a>
        </div>
    </section>

    {{-- <div>
        <p>TEST MASUK </p>
        <table border="1">
            <tr>
                <td>Nama</td>
                <td>Kategori</td>
            </tr>

            @foreach ($data as $d)
            <tr>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->kategori}} </td>
            </tr>
                
            @endforeach
        </table>

        <a href="{{ route('logout') }}">LOG OUT </a>
    </div> --}}
</body>
</html>