<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form PHP</title>  
</head>
<body>
    <h2>Alat Cek Nilai</h2>
    <form action="proses.php" method="POST">
        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
            <label>Nama :</label>
            <input type="text" name="nama" required>
        </div>

        <div style="display: flex; gap: 10px; margin-bottom: 20px;">
            <label>Nilai :</label>
            <input type="number" name="nilai" required>
        </div>
        
        <button type="submit" class="btn-submit">Hasil</button>
    </form>
</body>
</html>