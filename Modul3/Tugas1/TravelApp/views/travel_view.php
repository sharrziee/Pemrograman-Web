<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Package Showcase</title>
    <style>
        /* CSS sama seperti sebelumnya */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        .travel-container { display: flex; flex-direction: column; align-items: center; gap: 20px; margin-top: 20px; padding: 20px; }
        .travel-package { border-radius: 15px; padding: 20px; width: 300px; height: 200px; color: b; text-align: center; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); font-family: 'Times New Roman', Times, serif; }
        .travel-package.RedBlack { background: linear-gradient(145deg, #FFC0CB, #FFB2C1); border: 3px solid #333333; transition: transform 0.3s ease; }
        .travel-package.RedBlack:hover { transform: scale(1.05); box-shadow: 0px 6px 12px rgba(255, 0, 0, 0.2); }
        .travel-package h2 { font-size: 24px; margin-bottom: 10px; }
        .travel-package p { font-size: 16px; margin-bottom: 5px; }
        body { background-color: #E6E6FA; display: flex; justify-content: center; align-items: flex-start; height: 100vh; font-family: 'Times New Roman', Times, serif; }
    </style>
</head>
<body>
<div class="travel-container">
    <?php foreach ($bookings as $booking): ?>
        <div class="travel-package <?= $booking['colorTheme'] ?>">
            <h2><?= $booking['colorTheme'] ?> Travel Package</h2>
            <p>ID Pemesanan: <?= $booking['bookingId'] ?></p>
            <p>Nama Pemesan: <?= $booking['customerName'] ?></p>
            <p>Destinasi: <?= $booking['destination'] ?></p>
            <p>Harga Paket: $<?= $booking['price'] ?></p>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>