<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP pertemuan 8</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav>
            <a href="?page=kendaraan">Jenis Kendaraan</a>
            <a href="?page=genap">Bilangan Genap</a>
            <a href="?page=hewan">Daftar Hewan</a>
            <a href="?page=ganjil_genap">Ganjil / Genap</a>
        </nav>

        <div class="content">
            <?php
            $page = $_GET['page'] ?? 'kendaraan';
            switch ($page) {
                case 'kendaraan': include 'kendaraan.php'; break;
                case 'genap': include 'genap.php'; break;
                case 'hewan': include 'hewan.php'; break;
                case 'ganjil_genap': include 'ganjil_genap.php'; break;
                default: echo "<p>Halaman tidak ditemukan.</p>"; break;
            }
            ?>
        </div>
    </div>
</body>
</html>