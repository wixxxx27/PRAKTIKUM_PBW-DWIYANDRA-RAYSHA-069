<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn->begin_transaction(); // Memulai transaksi database

    try {
        $pelanggan_id = $_POST['pelanggan_id'];
        $tanggal_pesanan = date('Y-m-d');
        $total_harga = 0;

        // 1. Insert ke tabel Pesanan
        $stmt = $conn->prepare("INSERT INTO Pesanan (Tanggal_Pesanan, Pelanggan_ID, Total_Harga) VALUES (?, ?, ?)");
        $stmt->bind_param("sid", $tanggal_pesanan, $pelanggan_id, $total_harga);
        $stmt->execute();
        $pesanan_id = $conn->insert_id;

        // 2. Loop data buku yang dipesan
        foreach ($_POST['buku'] as $buku) {
            $buku_id = $buku['id'];
            $kuantitas = $buku['kuantitas'];

            // Ambil harga dan cek stok terbaru
            $stmt_buku = $conn->prepare("SELECT Harga, stok FROM Buku WHERE ID = ?");
            $stmt_buku->bind_param("i", $buku_id);
            $stmt_buku->execute();
            $stmt_buku->bind_result($harga_per_satuan, $stok);
            $stmt_buku->fetch();
            $stmt_buku->close();

            if ($stok < $kuantitas) {
                throw new Exception("Stok buku ID $buku_id tidak cukup.");
            }

            // 3. Insert ke tabel detail_pesanan
            $stmt_detail = $conn->prepare("INSERT INTO detail_pesanan (Pesanan_ID, Buku_ID, Kuantitas, Harga_Per_Satuan) VALUES (?, ?, ?, ?)");
            $stmt_detail->bind_param("iiid", $pesanan_id, $buku_id, $kuantitas, $harga_per_satuan);
            $stmt_detail->execute();

            $total_harga += $kuantitas * $harga_per_satuan;

            // 4. Update stok buku
            $stmt_update = $conn->prepare("UPDATE Buku SET stok = stok - ? WHERE ID = ?");
            $stmt_update->bind_param("ii", $kuantitas, $buku_id);
            $stmt_update->execute();
        }

        // 5. Update total harga akhir di tabel Pesanan
        $stmt_total = $conn->prepare("UPDATE Pesanan SET Total_Harga = ? WHERE ID = ?");
        $stmt_total->bind_param("di", $total_harga, $pesanan_id);
        $stmt_total->execute();

        $conn->commit(); // Simpan semua perubahan
        header("Location: transaksi.php?message=" . urlencode("Pesanan berhasil dibuat."));
        exit;

    } catch (Exception $e) {
        $conn->rollback(); // Batalkan semua perubahan jika terjadi error
        header("Location: transaksi.php?message=" . urlencode("Gagal membuat pesanan: " . $e->getMessage()));
        exit;
    }
}
?>