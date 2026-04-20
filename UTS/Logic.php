<?php

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$layanan = $_POST['layanan'];
$barang = isset($_POST['barang']) ? $_POST['barang'] : [];


define("PAJAK", 0.15);

$subtotal = 0;
$daftar_barang = "";

if (in_array('Sepatu Adidas ADI ZERO', $barang)) {
    $jumlah = isset($_POST['jumlah_Sepatu_Adidas_ADI_ZERO']) ? (int)$_POST['jumlah_Sepatu_Adidas_ADI_ZERO'] : 0;
    if ($jumlah > 0) {
        $harga = 2000000;
        $total_item = $harga * $jumlah;
        $subtotal += $total_item;
        $daftar_barang .= "Sepatu Adidas ADI ZERO ($jumlah x Rp " . number_format($harga) . ") = Rp " . number_format($total_item) . "<br>";
    }
}

if (in_array('Kamera Sony a6400', $barang)) {
    $jumlah = isset($_POST['jumlah_kamera']) ? (int)$_POST['jumlah_kamera'] : 0;
    if ($jumlah > 0) {
        $harga = 15000000;
        $total_item = $harga * $jumlah;
        $subtotal += $total_item;
        $daftar_barang .= "Kamera Sony a6400 ($jumlah x Rp " . number_format($harga) . ") = Rp " . number_format($total_item) . "<br>";
    }
}

if (in_array('Motor Beat Karbu', $barang)) {
    $jumlah = isset($_POST['jumlah_motor']) ? (int)$_POST['jumlah_motor'] : 0;
    if ($jumlah > 0) {
        $harga = 16000000;
        $total_item = $harga * $jumlah;
        $subtotal += $total_item;
        $daftar_barang .= "Motor Beat Karbu ($jumlah x Rp " . number_format($harga) . ") = Rp " . number_format($total_item) . "<br>";
    }
}

if ($subtotal == 0) {
    echo "<h2> PIlih Barang nya dulu!!! </h2>";
    exit;
}


$total_sebelum_pajak = $subtotal;
$nilai_pajak = $total_sebelum_pajak * PAJAK;
$biaya_layanan = ($layanan == 'Prioritas') ? 5000 : 0;
$total_bayar = $total_sebelum_pajak + $nilai_pajak + $biaya_layanan;

?>
<div style="border: 2px solid black; padding: 20px; width: fit-content; font-family: sans-serif;">
    <h3>Ringkasan Pemesanan</h3>
    <p>Nama : <?php echo $nama; ?></p>
    <p>NIM : <?php echo $nim; ?></p>
    <p>Email : <?php echo $email; ?></p>
    <p>Layanan : <?php echo $layanan; ?></p>
    <p>Daftar barang : <?php echo $daftar_barang; ?></p>
    <p>Subtotal : Rp. <?php echo number_format($total_sebelum_pajak, 0, ',', '.'); ?>,-</p>
    <p>Pajak (15%) : Rp. <?php echo number_format($nilai_pajak, 0, ',', '.'); ?>,-</p>
    <p>Biaya Layanan : Rp. <?php echo number_format($biaya_layanan, 0, ',', '.'); ?>,-</p>
    <p>Total : Rp. <?php echo number_format($total_bayar, 0, ',', '.'); ?>,-</p>
</div>
<?php
