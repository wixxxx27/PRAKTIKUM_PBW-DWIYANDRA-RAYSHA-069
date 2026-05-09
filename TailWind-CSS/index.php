<?php
include 'proteksi.php';
include 'proses_index.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard — Toko Buku</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#003049',
            danger:  '#D62828',
            warning: '#F77F00',
            accent:  '#FCBF49',
            info:    '#2FA4D7',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-gray-100 min-h-screen">

  
  <nav class="bg-primary px-6 py-3 flex items-center justify-between">
    <span class="text-accent font-bold text-lg">Toko Buku</span>
    <div class="flex items-center gap-4 text-sm">
      <a href="logout.php" class="bg-danger text-white px-3 py-1.5 rounded text-xs font-semibold hover:opacity-80 transition">Logout</a>
    </div>
  </nav>

  <div class="max-w-5xl mx-auto px-4 py-8">


    <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4 mb-6">
      <h2 class="text-xl font-bold text-primary">Daftar Buku</h2>

      <form method="get" class="flex gap-2 items-end flex-wrap">
        <div>
          <label class="block text-xs text-gray-500 mb-1">Judul</label>
          <input type="text" name="judul" placeholder="Cari judul..."
            value="<?= htmlspecialchars($search_judul) ?>"
            class="border border-gray-300 rounded px-3 py-1.5 text-sm focus:outline-none focus:ring-1 focus:ring-info">
        </div>
        <div>
          <label class="block text-xs text-gray-500 mb-1">Tahun</label>
          <input type="number" name="tahun_terbit" placeholder="2020"
            value="<?= htmlspecialchars($search_tahun) ?>"
            class="border border-gray-300 rounded px-3 py-1.5 text-sm w-24 focus:outline-none focus:ring-1 focus:ring-info">
        </div>
        <button type="submit" class="bg-info text-white px-4 py-1.5 rounded text-sm hover:opacity-90 transition">Cari</button>
        <a href="index.php"   class="bg-gray-300 text-gray-700 px-4 py-1.5 rounded text-sm hover:opacity-90 transition">Reset</a>
      </form>
    </div>

    
    <div class="bg-white rounded-lg shadow overflow-hidden">
      <table class="w-full text-sm">
        <thead>
          <tr class="bg-primary text-accent text-xs uppercase tracking-wide">
            <th class="px-4 py-3 text-left">ID</th>
            <th class="px-4 py-3 text-left">Judul</th>
            <th class="px-4 py-3 text-left">Penulis</th>
            <th class="px-4 py-3 text-left">Tahun</th>
            <th class="px-4 py-3 text-left">Harga</th>
            <th class="px-4 py-3 text-left">Stok</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
          <?php while ($row = $result->fetch_assoc()): ?>
          <tr class="hover:bg-gray-50 transition-colors">
            <td class="px-4 py-2.5 text-gray-400 text-xs"><?= $row['ID'] ?></td>
            <td class="px-4 py-2.5 font-medium text-primary"><?= htmlspecialchars($row['Judul']) ?></td>
            <td class="px-4 py-2.5 text-gray-600"><?= htmlspecialchars($row['Penulis']) ?></td>
            <td class="px-4 py-2.5 text-gray-500"><?= $row['Tahun_Terbit'] ?></td>
            <td class="px-4 py-2.5 text-gray-800">Rp<?= number_format($row['Harga'], 0, ',', '.') ?></td>
            <td class="px-4 py-2.5">
              <span class="px-2 py-0.5 rounded text-xs font-semibold
                <?= $row['stok'] > 5 ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-600' ?>">
                <?= $row['stok'] ?>
              </span>
            </td>
          </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>

  </div>
</body>
</html>
