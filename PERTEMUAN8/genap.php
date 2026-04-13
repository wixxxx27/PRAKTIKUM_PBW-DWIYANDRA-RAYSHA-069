<h3>Cetak Bilangan Genap </h3>
<form method="POST">
    <div class="form-group">
        <label>Tampilkan Bilangan Genap Sampe Angka:</label>
        <input type="number" name="batas" min="2" required>
    </div>
    <button type="submit" name="btn_genap">Cetak Bilangan</button>
</form>

<?php
if (isset($_POST['btn_genap'])) {
    $batas = (int)$_POST['batas'];
    
    echo "<div class='result-box'>Deret bilangan genap dari 2 sampai $batas:<br><br>";
    
    for ($i = 2; $i <= $batas; $i++) {
        if ($i % 2 == 0) {
            echo "<strong>$i</strong> ";
        }
    }
    
    echo "</div>";
}
?>