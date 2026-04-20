<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form PHP2</title>  
</head>
<body>
    <h2>Form Pembayaran UKT Mahasiswa</h2>
    <form action="proses.php" method="POST">
        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
            <label>Nama:</label>
            <input type="text" name="nama" required>
        </div>

        <div style="display: flex; gap: 10px; margin-bottom: 20px;">
            <label>NPM :</label>
            <input type="number" name="npm" required>
        </div>

        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
            <label>Program Studi :</label>
            <input type="text" name="prodi" required>
        </div>

        <div style="display: flex; gap: 10px; margin-bottom: 20px;">
            <label>Semester:</label>
            <input type="number" name="sms" required>
        </div>

        <div style="display: flex; gap: 10px; margin-bottom: 10px;">
            <label>UKT :</label>
            <input type="number" name="ukt" required>
        </div>
        
        <button type="submit" class="btn-submit">Hasil</button>
    </form>
</body>
</html>