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

    <div class="payment-page">
        <!-- Gambar lapangan -->
        <img src="{{ asset('assets/images/Group 23.png') }}" alt="Lapangan">

        <!-- Detail Pesanan -->
        <div class="payment-details">
            <!-- Detail Pesanan -->
            <div class="section">
                <h3>Detail Pesanan</h3>
                <div class="detail-item">
                <img src="{{ asset('assets/images/time.png') }}" alt="Clock Icon">
                    08.00 – 10.00 WIB
                </div>
                <div class="detail-item">
                <img src="{{ asset('assets/images/calendar.png') }}" alt="Calendar Icon">
                    Selasa, 20 Agustus 2024
                </div>
                <div class="detail-item">
                <img src="{{ asset('assets/images/soccer-field.png') }}" alt="Size Icon">
                    18,8 m x 24,95 m
                </div>
            </div>

            <!-- Data Pemesan -->
            <div class="section">
                <h3>Data Pemesan</h3>
                <div class="detail-item">
                <img src="{{ asset('assets/images/account.png') }}" alt="User Account">
                    Mohammad Farkhan
                </div>
                <div class="detail-item">
                <img src="{{ asset('assets/images/phone.png') }}" alt="Phone Icon">
                    +62 1234567890
                </div>
            </div>

            <!-- Detail Harga -->
            <div class="section price-details">
                <h3>Detail Harga</h3>
                <div class="price-item">
                    <img src="{{ asset('assets/images/dollar.png') }}" alt="Price Icon">
                    <span>Harga</span>
                    <span>Rp. 500.000</span>
                </div>
                <div class="price-item">
                    <img src="{{ asset('assets/images/discount-line.png') }}" alt="diskon-line">
                    <span>Potongan harga</span>
                    <span>Rp. 50.000</span>
                </div>
                <div class="price-item original-price">
                    <span>Rp. 500.000</span>
                </div>
                <div class="total-price">Rp. 450.000</div>
            </div>
        </div>

        <!-- Metode Pembayaran -->
        <h3>Metode Pembayaran</h3>
        <div class="payment-methods">
            <button class="selected">Bank BCA</button>
            <button>Bank BRI</button>
            <button>Bank Mandiri</button>
            <button>OVO</button>
            <button>DANA</button>
            <button>GOPAY</button>
            <button>LINKAJA</button>
        </div>

        <!-- Button Bayar -->
        <button class="pay-button">Bayar</button>
    </div>

</body>
</html>