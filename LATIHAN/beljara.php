<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perbandingan GET dan POST</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .box { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        .get-box { background-color: #ffebee; } /* Merah muda untuk GET */
        .post-box { background-color: #e8f5e9; } /* Hijau muda untuk POST */
        .hasil { background-color: #fff3e0; padding: 15px; border-left: 5px solid #ff9800; }
    </style>
</head>
<body>

    <h2>Simulasi Perbedaan GET dan POST</h2>

    <div class="box get-box">
        <h3>1. Form Menggunakan GET</h3>
        <p><i>Contoh kasus: Fitur Pencarian (Data tidak rahasia)</i></p>
        <form action="" method="GET">
            <label>Cari Barang :</label>
            <input type="text" name="kata_kunci" placeholder="Misal: Sepatu" required>
            <button type="submit">Kirim dengan GET</button>
        </form>
    </div>

    <div class="box post-box">
        <h3>2. Form Menggunakan POST</h3>
        <p><i>Contoh kasus: Input Password (Data rahasia)</i></p>
        <form action="" method="POST">
            <label>Password :</label>
            <input type="password" name="password_rahasia" placeholder="Masukkan password" required>
            <button type="submit">Kirim dengan POST</button>
        </form>
    </div>

    <hr>

    <h3>Hasil Respon Server:</h3>
    <div class="hasil">
        <?php
        // 1. Logika untuk menangkap metode GET
        if (isset($_GET['kata_kunci'])) {
            $data_get = $_GET['kata_kunci'];
            echo "<p><strong>Berhasil ditangkap dengan \$_GET!</strong></p>";
            echo "<p>Barang yang kamu cari: <b>" . htmlspecialchars($data_get) . "</b></p>";
            echo "<p style='color: red;'><strong>👉 Perhatikan Address Bar (URL) browsermu!</strong> Ada tambahan <i>?kata_kunci=$data_get</i> di atas kan? Datanya bocor ke URL.</p>";
        }

        // 2. Logika untuk menangkap metode POST
        if (isset($_POST['password_rahasia'])) {
            $data_post = $_POST['password_rahasia'];
            echo "<p><strong>Berhasil ditangkap dengan \$_POST!</strong></p>";
            echo "<p>Password kamu adalah: <b>" . htmlspecialchars($data_post) . "</b></p>";
            echo "<p style='color: green;'><strong>👉 Perhatikan Address Bar (URL) browsermu!</strong> URL tetap bersih. Datanya aman disembunyikan di balik layar.</p>";
        }

        // Pesan jika belum ada tombol yang ditekan
        if (!isset($_GET['kata_kunci']) && !isset($_POST['password_rahasia'])) {
            echo "<p>Belum ada data yang dikirim. Silakan coba isi dan klik tombol submit di atas.</p>";
        }
        ?>
    </div>

</body>
</html>