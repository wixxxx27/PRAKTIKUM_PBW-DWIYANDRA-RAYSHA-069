<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login — Toko Buku</title>
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
<body class="min-h-screen bg-primary flex items-center justify-center">

  <div class="w-full max-w-sm bg-white rounded-lg shadow-lg p-8">

    <div class="mb-6">
      <h1 class="text-2xl font-bold text-primary">Toko Buku</h1>
      <p class="text-sm text-gray-400 mt-1">Silakan login untuk melanjutkan</p>
    </div>

    <?php if (isset($_GET['message'])): ?>
      <div class="mb-4 text-sm text-danger bg-red-50 border border-red-200 px-3 py-2 rounded">
        <?= htmlspecialchars($_GET['message']) ?>
      </div>
    <?php endif; ?>

    <form method="post" action="proses_login.php" class="space-y-4">
      <div>
        <label class="block text-xs font-semibold text-gray-600 mb-1 uppercase tracking-wide">Username</label>
        <input type="text" name="username" required autofocus
          class="w-full border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-info focus:ring-1 focus:ring-info transition">
      </div>
      <div>
        <label class="block text-xs font-semibold text-gray-600 mb-1 uppercase tracking-wide">Password</label>
        <input type="password" name="password" required
          class="w-full border border-gray-200 rounded px-3 py-2 text-sm focus:outline-none focus:border-info focus:ring-1 focus:ring-info transition">
      </div>
      <button type="submit"
        class="w-full bg-primary text-white font-semibold py-2 rounded text-sm hover:bg-opacity-90 transition mt-2">
        Masuk
      </button>
    </form>

  </div>

</body>
</html>
