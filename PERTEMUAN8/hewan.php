<h3>Daftar Hewan</h3>
<form method="POST">
    <div class="form-group">
        <label>Tambah Hewan:</label>
        <input type="text" name="input_hewan" >
    </div>
    <button type="submit" name="btn_hewan">Tambahkan ke Daftar</button>
</form>

<?php
$array_hewan = ["Kura Kura asli <strong>johar</strong>", "Ikan cupang asli <strong>depok</strong>", "Gajah <strong>bogor</strong>"]; 

if (isset($_POST['btn_hewan'])) {
    $hewan_baru = explode(",", $_POST['input_hewan']); 
    
    foreach ($hewan_baru as $hewan) {
        $array_hewan[] = trim($hewan);
    }
}

echo "<div class='result-box'><strong>Daftar Hewan Saat Ini:</strong><ul>";


foreach ($array_hewan as $tampil) {
    echo "<li>$tampil</li>";
}

echo "</ul></div>";
?>