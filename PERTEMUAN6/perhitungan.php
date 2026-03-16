<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Praktikum PHP Dasar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">  
    <style>

        .container {
            border: 2px solid black;
            padding: 20px;
            width: fit-content;
            font-family: 'Poppins', sans-serif;
            line-height: 1.5;
        }
        h2 {
            margin-top: 0;
            margin-bottom: 10px;
            background-color: black;
            color: white;
            padding: 10px;
        }
        hr {
            border: 1px solid black;
            margin-bottom: 15px;
        }
        p {
            margin: 0; 
        }
    </style>
</head>
<body>

    <?php
    // Pajak 10%
    define("PAJAK", 0.1);
    //Barang yang mau dibeli
    $barang = array(
        "nama" => "Laptop Acer Predator Helios NEO 16 [Intel i9 14900HX RTX 4060]",
        "harga" => 27000000
    );
    $jumlah_beli = 1;
    //Proses Perhitungan
    $total_sebelum_pajak = $barang["harga"] * $jumlah_beli;
    $nilai_pajak = $total_sebelum_pajak * PAJAK;
    $total_bayar = $total_sebelum_pajak + $nilai_pajak;
    ?>

    <div class="container">
        <h2>Perhitungan Total Pembelian Laptop Menggunakan Array</h2>
        <hr>
        <p>Nama Barang: <?php echo $barang["nama"]; ?></p>
        <p>Harga Satuan: Rp <?php echo number_format($barang["harga"], 0, ',', '.'); ?></p>
        <p>Jumlah Beli: <?php echo $jumlah_beli; ?></p>
        <p>Total Harga (Sebelum Pajak): Rp <?php echo number_format($total_sebelum_pajak, 0, ',', '.'); ?></p>
        <p>Pajak (10%): Rp <?php echo number_format($nilai_pajak, 0, ',', '.'); ?></p>
        <p><strong>Total Bayar: Rp <?php echo number_format($total_bayar, 0, ',', '.'); ?></strong></p>
    </div>

</body>
</html>