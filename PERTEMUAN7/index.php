<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama - Pertemuan 7</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@400;500&family=Poppins:wght@500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-darkest: #0D1A63;
            --color-dark: #1A2CA3;
            --color-medium: #2845D6;
            --color-accent: #F68048;
            --bg-color: #0D1A63; 
}

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: var(--bg-color);
            /* Menambahkan sedikit aksen background agar tidak terlalu polos */
            background-image: radial-gradient(circle at top right, rgba(40, 69, 214, 0.1), transparent 400px),
                                radial-gradient(circle at bottom left, rgba(246, 128, 72, 0.05), transparent 400px);
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .container {
            background: #ffffff;
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(13, 26, 99, 0.08);
            text-align: center;
            width: 100%;
            max-width: 450px;
            border-top: 5px solid var(--color-darkest);
        }

        .container h1 {
            font-family: 'Playfair Display', serif;
            color: var(--color-darkest);
            font-size: 2.2rem;
            margin-bottom: 10px;
            margin-top: 0;
        }

        .container p {
            color: #666;
            font-size: 1rem;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .btn-wrapper {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .btn {
            display: inline-block;
            padding: 16px 24px;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 1.05rem;
            font-weight: 600;
            color: #ffffff;
            border-radius: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        /* Latihan 1 Button Style */
        .btn-latihan1 {
            background-color: var(--color-dark);
            box-shadow: 0 8px 20px rgba(26, 44, 163, 0.2);
        }

        /* Latihan 2 Button Style */
        .btn-latihan2 {
            background-color: var(--color-medium);
            box-shadow: 0 8px 20px rgba(40, 69, 214, 0.2);
        }

        /* Hover Effect using the Orange color */
        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background-color: var(--color-accent);
            transition: all 0.4s ease;
            z-index: -1;
        }

        .btn:hover::before {
            left: 0;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(246, 128, 72, 0.4);
        }

        .footer-text {
            margin-top: 30px;
            font-size: 0.85rem;
            color: #999;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Tugas Pertemuan 7</h1>
        <p>kumpulan latihan form handling PHP pada matakuliah pemrograman web dasar</p>

        <div class="btn-wrapper">
            <a href="Latihan1/LatihanFormPHP1.php" class="btn btn-latihan1">Buka Latihan 1</a>
            <a href="Latihan2/LatihanFormPHP2.php" class="btn btn-latihan2">Buka Latihan 2</a>
        </div>

        <div class="footer-text">
            Pertemuan 7
        </div>
    </div>

</body>
</html>