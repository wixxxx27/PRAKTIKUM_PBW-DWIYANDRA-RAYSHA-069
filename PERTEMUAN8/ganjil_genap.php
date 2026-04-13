<h3>Cek Angka Ganjil Genap</h3>
<form method="POST">
    <div class="form-group">
        <label>Masukkan Angka Sembarang:</label>
        <input type="number" name="angka" required>
    </div>
    <button type="submit" name="btn_angka">Periksa Angka</button>
</form>

<?php
if (isset($_POST['btn_angka'])) {
    $angka = (int)$_POST['angka'];
    
    // Ini yang namanya Ternary Operator (bentuk singkat if-else)
    $status = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    
    echo "<div class='result-box'>Angka $angka adalah bilangan <strong>$status</strong>.</div>";
}
?>