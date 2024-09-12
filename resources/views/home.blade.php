<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTSAL</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Load CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #FF9800;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }
        header img.logo {
            height: 50px;
        }
        header .bell-icon {
            position: relative;
        }
        header .bell-icon img {
            height: 30px;
            cursor: pointer;
        }
        .search-bar {
            margin: 20px auto;
            display: flex;
            justify-content: center;
            position: relative;
        }
        .search-bar input {
            width: 80%;
            padding: 10px;
            border-radius: 25px;
            border: 1px solid #ddd;
        }
        .search-bar button {
            position: absolute;
            right: 10%;
            padding: 10px 20px;
            background-color: #FF9800;
            border: none;
            border-radius: 25px;
            color: white;
            cursor: pointer;
        }
        .promotions {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }
        .promotions .promo {
            background-color: white;
            border-radius: 10px;
            padding: 10px;
            width: 30%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .promotions .promo img {
            width: 100%;
            border-radius: 10px;
        }
        .promotions .promo button {
            background-color: #FF9800;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            position: absolute;
            bottom: 10px;
            right: 10px;
        }
        .category {
            text-align: center;
            margin: 20px 0;
        }
        .category h2 {
            margin-bottom: 20px;
        }
        .category-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .category-icons div {
            background-color: white;
            padding: 20px;
            border-radius: 50%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }
        .top-yards {
            text-align: center;
            margin: 40px 0;
        }
        .top-yards .yard-list {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .yard-item {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .yard-item img {
            width: 100%;
            border-radius: 10px;
        }
        .yard-item button {
            background-color: #FF9800;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header>
    <!-- Ganti tulisan FOOTSAL dengan gambar -->
    <img src="{{ asset('assets/images/Group 334.png') }}" class="logo" alt="FOOTSAL Logo">
    <p>Kickstart Your Match, Anytime, Anywhere!</p>
    <!-- Tambahkan ikon lonceng di sebelah kanan -->
    <div class="bell-icon">
        <img src="{{ asset('assets/images/bell-icon.png') }}" alt="Notification Bell">
    </div>
</header>

    <div class="search-bar">
        <input type="text" placeholder="Cari lapangan...">
        <button>Search</button>
    </div>

    <div class="promotions">
        <div class="promo">
            <img src="{{ asset('images/promo1.jpg') }}" alt="Promo 1">
            <button>Claim</button>
        </div>
        <div class="promo">
            <img src="{{ asset('images/promo2.jpg') }}" alt="Promo 2">
            <button>Claim</button>
        </div>
        <div class="promo">
            <img src="{{ asset('images/promo3.jpg') }}" alt="Promo 3">
            <button>Claim</button>
        </div>
    </div>

    <div class="category">
        <h2>Category</h2>
        <div class="category-icons">
            <div><img src="{{ asset('images/location-icon.png') }}" alt="Location"></div>
            <div><img src="{{ asset('images/type-icon.png') }}" alt="Type"></div>
            <div><img src="{{ asset('images/size-icon.png') }}" alt="Size"></div>
        </div>
    </div>

    <div class="top-yards">
        <h2>Top Rated Yards</h2>
        <div class="yard-list">
            <div class="yard-item">
                <img src="{{ asset('images/yard1.jpg') }}" alt="Yard 1">
                <p>Lapangan Futsal Romeo 5A - 10% Discount area</p>
                <button>Pesan Sekarang</button>
            </div>
            <div class="yard-item">
                <img src="{{ asset('images/yard2.jpg') }}" alt="Yard 2">
                <p>Lapangan Futsal Romeo 5B - 10% Discount area</p>
                <button>Pesan Sekarang</button>
            </div>
            <div class="yard-item">
                <img src="{{ asset('images/yard3.jpg') }}" alt="Yard 3">
                <p>Lapangan Futsal Romeo 6C - 10% Discount area</p>
                <button>Pesan Sekarang</button>
            </div>
        </div>
    </div>

</body>
</html>
