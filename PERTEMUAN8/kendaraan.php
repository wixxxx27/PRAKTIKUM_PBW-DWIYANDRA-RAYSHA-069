<h3>Cek Jenis Kendaraan</h3>
<form method="POST">
    <div class="form-group">
        <label>Masukkan Jumlah Roda:</label>
        <input type="number" name="roda" required>
    </div>
    <button type="submit" name="btn_kendaraan">Cek Sekarang</button>
</form>

<?php

if (isset($_POST['btn_kendaraan'])) {
    $roda = (int)$_POST['roda'];
    
    switch ($roda) {
        case 2: $hasil = "Motor"; break;
        case 3: $hasil = "Becak"; break;
        case 4: $hasil = "Mobil"; break;
        default: $hasil = "Kendaraan tidak diketahui"; break;
    }
    
    echo "<div class='result-box'>Hasil: <strong>$hasil</strong></div>";
}
?>