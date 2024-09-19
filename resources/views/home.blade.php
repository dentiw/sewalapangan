<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTSAL</title>
    <!-- Link ke app.css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Link ke Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

<!-- Header pertama dengan latar belakang putih -->
<header class="header-white">
    <img src="{{ asset('assets/images/Group 334.png') }}" class="logo" alt="FOOTSAL Logo">
    <div class="bell-icon">
        <img src="{{ asset('assets/images/Notification.png') }}" alt="Notification Bell">
    </div>
</header>

<!-- Header kedua dengan latar belakang oranye -->
<header class="header-orange">
    <div class="header-text">
        <p>"Kickstart Your Match,</p>
        <p>Anytime, Anywhere!"</p>
    </div>
    <div class="header-image">
        <img src="{{ asset('assets/images/gambar sapi.png') }}" >
    </div>
</header>

<div class="search-filter">
    <div class="search-bar">
        <input type="text" placeholder="Cari lapangan...">
    </div>
    <button class="filter-btn">
        <i class="fas fa-filter"></i> <!-- Ikon filter dari Font Awesome -->
    </button>
</div>

<div class="special-for-you">
    <h2>#SpecialForYou</h2>
</div>
<div class="promotions">
    <div class="promo">
        <img src="{{ asset('assets/images/CardDiskon.png') }}" alt="Promo 1">
        <button>Claim</button>
    </div>
    <div class="promo">
        <img src="{{ asset('assets/images/CardDiskon1.png') }}" alt="Promo 2">
        <button>Claim</button>
    </div>
    <div class="promo">
        <img src="{{ asset('assets/images/CardDiskon.png') }}" alt="Promo 3">
        <button>Claim</button>
    </div>
</div>

<div class="category">
    <h2>Category</h2>
    <div class="category-icons">
    <div>
        <img src="{{ asset('assets/images/Location.png') }}" alt="location">
            <div class="category-label">Location</div> <!-- Label kategori -->
        </div>
        <div>
            <img src="{{ asset('assets/images/Type.png') }}" alt="type">
            <div class="category-label">Type</div> <!-- Label kategori -->
        </div>
        <div>
            <img src="{{ asset('assets/images/Size.png') }}" alt="size">
            <div class="category-label">Size</div> <!-- Label kategori -->
        </div>
    </div>
</div>

<div class="top-yards">
    <h2>Top Rated Yards</h2>
    <div class="yard-list">
    <!-- Card Yard 1-->
    <div class="yard-item">
        <img src="{{ asset('assets/images/yard1.png') }}" alt="yard1">
        <div class="yard-info">
            <!-- Nama lapangan -->
            <div class="yard-name">Lapangan Futsal Romeo 5A</div>
            <!-- Diskon dengan ikon -->
            <div class="discount-section">
                <img src="{{ asset('assets/images/Discount.png') }}" alt="diskon">
                <span>10% Discount area</span>
            </div>
            <!-- Rating dengan ikon bintang -->
            <div class="yard-rating">
                <span>⭐ 4.2/5 (40)</span>
            </div>
            <!-- Garis pemisah -->
            <hr>
            <!-- Available slot dan pesan sekarang -->
            <div class="bottom-section">
                <div class="available-slots">Available 3 Slot Today</div>
                <a href="#" class="pesan-sekarang">Pesan Sekarang</a>
            </div>
        </div>
    </div>
    <!-- Card Yard -->
    <div class="yard-item">
        <img src="{{ asset('assets/images/yard2.png') }}" alt="yard2">
        <div class="yard-info">
            <!-- Nama lapangan -->
            <div class="yard-name">Lapangan Futsal Romeo 5B</div>
            <!-- Diskon dengan ikon -->
            <div class="discount-section">
                <img src="{{ asset('assets/images/Discount.png') }}" alt="diskon">
                <span>10% Discount area</span>
            </div>
            <!-- Rating dengan ikon bintang -->
            <div class="yard-rating">
                <span>⭐ 4.2/5 (40)</span>
            </div>
            <!-- Garis pemisah -->
            <hr>
            <!-- Available slot dan pesan sekarang -->
            <div class="bottom-section">
                <div class="available-slots">Available 3 Slot Today</div>
                <a href="#" class="pesan-sekarang">Pesan Sekarang</a>
            </div>
        </div>
    </div>
    <!-- Card Yard 3-->
    <div class="yard-item">
        <img src="{{ asset('assets/images/yard3.png') }}" alt="yard3">
        <div class="yard-info">
            <!-- Nama lapangan -->
            <div class="yard-name">Lapangan Futsal Romeo 5C</div>
            <!-- Diskon dengan ikon -->
            <div class="discount-section">
                <img src="{{ asset('assets/images/Discount.png') }}" alt="diskon">
                <span>10% Discount area</span>
            </div>
            <!-- Rating dengan ikon bintang -->
            <div class="yard-rating">
                <span>⭐ 4.2/5 (40)</span>
            </div>
            <!-- Garis pemisah -->
            <hr>
            <!-- Available slot dan pesan sekarang -->
            <div class="bottom-section">
                <div class="available-slots">Available 3 Slot Today</div>
                <a href="#" class="pesan-sekarang">Pesan Sekarang</a>
            </div>
        </div>
    </div>
</div>


</body>
</html>