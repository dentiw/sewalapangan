<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment Page</title>
    <!-- Link to External CSS File -->
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
</head>
<body>

    <div class="container">
        <!-- Gambar lapangan -->
        <img src="{{ asset('assets/images/Group 23.png') }}" class="lapangan" alt="lapangan">

        <!-- Info Section -->
        <div class="info-section">
            <div class="info-left">
                <h2>Lapangan Futsal Romeo 5A</h2>
                <div class="discount-area">
                <img src="{{ asset('assets/images/discount.png') }}" class="diskon" alt="diskon">
                    10% Discount area
                </div>
            </div>
        </div>

        <!-- Detail Section -->
        <div class="detail-section">
            <!-- Detail Pesanan -->
            <div>
                <p class="detail-title">Detail Pesanan</p>
                <div class="detail-item">
                <img src="{{ asset('assets/images/time.png') }}" class="time" alt="time">
                    08.00 - 10.00 WIB
                </div>
                <div class="detail-item">
                <img src="{{ asset('assets/images/calendar.png') }}" class="calendar" alt="calendar">
                    Selasa, 20 Agustus 2024
                </div>
                <div class="detail-item">
                <img src="{{ asset('assets/images/soccer-field.png') }}" class="soccer-field" alt="soccer-field">
                    18,8 m x 24,95 m
                </div>
            </div>

            <!-- Data Pemesan -->
            <div>
                <p class="detail-title">Data Pemesan</p>
                <div class="detail-item">
                <img src="{{ asset('assets/images/account.png') }}" class="account" alt="account">
                    Mohammad Farkhan
                </div>
                <div class="detail-item">
                <img src="{{ asset('assets/images/phone.png') }}" class="phone" alt="phone">
                    +62 1234567890
                </div>
            </div>

            <!-- Detail Harga -->
            <div class="price-section">
                <p class="detail-title">Detail Harga</p>
                <div class="price-row">
                    <img src="{{ asset('assets/images/dollar.png') }}" class="price-icon" alt="price">
                    Harga: Rp. 500.000
                </div>
                <div class="price-row">
                    <img src="{{ asset('assets/images/discount-line.png') }}" class="discount-icon" alt="discount">
                    Potongan harga: Rp. 50.000
                </div>
                <div class="total-price-section">
                    <div class="total-text">Total Harga</div>
                    <div class="price-detail">
                        <div class="price-discount">Rp. 500.000</div>
                        <div class="total-price">Rp. 450.000</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Metode Pembayaran -->
        <p class="detail-title">Metode Pembayaran</p>
        <div class="payment-methods">
            <button class="selected">Bank BCA</button>
            <button>Bank BRI</button>
            <button>Bank Mandiri</button>
            <button>OVO</button>
            <button>DANA</button>
            <button>GOPAY</button>
            <button>LINKAJA</button>
        </div>

        <!-- Pay Button -->
        <button class="pay-button">Bayar</button>
    </div>

</body>
</html>
