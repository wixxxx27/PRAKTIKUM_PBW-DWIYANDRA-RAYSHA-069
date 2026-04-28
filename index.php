<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>📚 Portal Tugas Praktikum Web</title>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;600;700;900&family=DM+Serif+Display:ital@0;1&family=Poppins:wght@300;400;500;600&family=Montserrat:wght@400;700;900&family=Raleway:wght@300;400;700&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --navy:      #091413;
      --royal:     #285A48;
      --blue:      #408A71;
      --orange:    #FE7F2D;
      --deep:      #285A48;
      --slate:     #8FABD4;
      --teal:      #B0E4CC;
      --lime:      #F6E7BC;
      --white:     #FFF6F6;
      --card-bg:   rgba(9, 20, 19, 0.72);
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      background: var(--navy);
      color: var(--white);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      overflow-x: hidden;
    }

    /* ─── ANIMATED BACKGROUND ─── */
    body::before {
      content: '';
      position: fixed; inset: 0; z-index: 0;
      background:
        radial-gradient(ellipse 80% 60% at 15% 20%, rgba(64,138,113,.38) 0%, transparent 65%),
        radial-gradient(ellipse 60% 50% at 85% 75%, rgba(176,228,204,.22) 0%, transparent 60%),
        radial-gradient(ellipse 50% 40% at 50% 105%, rgba(254,127,45,.15) 0%, transparent 55%),
        linear-gradient(160deg, #091413 0%, #0d2420 50%, #102b1f 100%);
      animation: bgShift 14s ease-in-out infinite alternate;
    }
    @keyframes bgShift {
      0%   { filter: hue-rotate(0deg) brightness(1); }
      100% { filter: hue-rotate(18deg) brightness(1.07); }
    }

    /* floating orbs */
    .orb { position: fixed; border-radius: 50%; filter: blur(80px); z-index: 0; pointer-events: none; animation: float 12s ease-in-out infinite; }
    .orb1 { width:340px; height:340px; top:-100px; left:-80px; background: rgba(64,138,113,.28); animation-duration: 16s; }
    .orb2 { width:260px; height:260px; bottom:60px; right:-60px; background: rgba(176,228,204,.22); animation-duration: 12s; animation-delay: -4s; }
    .orb3 { width:200px; height:200px; top:50%; left:60%; background: rgba(254,127,45,.15); animation-duration: 20s; animation-delay: -8s; }
    @keyframes float {
      0%,100% { transform: translateY(0) scale(1); }
      50%       { transform: translateY(-40px) scale(1.08); }
    }

    /* ─── LAYOUT WRAPPER ─── */
    .wrapper { position: relative; z-index: 1; max-width: 1180px; margin: 0 auto; padding: 0 28px 80px; }

    /* ─── HERO HEADER ─── */
    .hero {
      text-align: center;
      padding: 80px 0 54px;
      animation: slideDown .8s cubic-bezier(.22,1,.36,1) both;
    }
    @keyframes slideDown { from { opacity:0; transform:translateY(-40px); } to { opacity:1; transform:none; } }

    .badge {
      display: inline-block;
      font-family: 'Raleway', sans-serif;
      font-size: .72rem; font-weight: 700; letter-spacing: .22em; text-transform: uppercase;
      color: var(--teal);
      border: 1px solid rgba(113,192,187,.4);
      background: rgba(113,192,187,.08);
      padding: 6px 18px; border-radius: 50px;
      margin-bottom: 22px;
      backdrop-filter: blur(8px);
    }

    .hero h1 {
      font-family: 'League Spartan', sans-serif;
      font-size: clamp(2.6rem, 6vw, 5rem);
      font-weight: 900; line-height: 1.05;
      letter-spacing: -.02em;
      background: linear-gradient(135deg, #fff 30%, var(--teal) 60%, var(--lime) 90%);
      -webkit-background-clip: text; -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 16px;
    }

    /* ─── BIODATA CARD ─── */
    .biodata-card {
      display: inline-flex;
      flex-direction: column;
      gap: 0;
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(176,228,204,.2);
      border-radius: 20px;
      padding: 28px 38px;
      margin: 0 auto 36px;
      backdrop-filter: blur(16px);
      position: relative;
      overflow: hidden;
      max-width: 420px;
      width: 100%;
    }
    .biodata-card::before {
      content: '';
      position: absolute; top: 0; left: 0; right: 0; height: 3px;
      background: linear-gradient(90deg, var(--blue), var(--teal), var(--lime));
      border-radius: 20px 20px 0 0;
    }
    .biodata-card::after {
      content: '';
      position: absolute; inset: 0;
      background: radial-gradient(ellipse 80% 60% at 50% 0%, rgba(176,228,204,.06), transparent 70%);
      pointer-events: none;
    }
    .biodata-label {
      font-family: 'Raleway', sans-serif;
      font-size: .6rem; font-weight: 700; letter-spacing: .22em; text-transform: uppercase;
      color: var(--teal); margin-bottom: 16px;
      display: flex; align-items: center; gap: 8px;
    }
    .biodata-label::after { content:''; flex:1; height:1px; background: rgba(176,228,204,.2); }
    .biodata-row {
      display: flex; align-items: baseline; gap: 12px;
      padding: 8px 0;
      border-bottom: 1px solid rgba(255,255,255,.05);
    }
    .biodata-row:last-child { border-bottom: none; padding-bottom: 0; }
    .biodata-row:first-of-type { padding-top: 0; }
    .biodata-key {
      font-family: 'Poppins', sans-serif;
      font-size: .72rem; font-weight: 500;
      color: rgba(255,255,255,.38);
      min-width: 56px; flex-shrink: 0;
    }
    .biodata-sep {
      color: rgba(176,228,204,.4);
      font-size: .8rem; flex-shrink: 0;
    }
    .biodata-val {
      font-family: 'Poppins', sans-serif;
      font-size: .88rem; font-weight: 600;
      color: rgba(255,255,255,.92);
      line-height: 1.4;
    }
    .biodata-val.name {
      font-family: 'League Spartan', sans-serif;
      font-size: 1rem; font-weight: 700;
      background: linear-gradient(135deg, #fff 40%, var(--teal));
      -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    }
    .biodata-val.npm {
      font-family: 'Montserrat', sans-serif;
      font-size: .82rem; font-weight: 700;
      color: var(--orange);
    }

    .hero-meta {
      display: flex; gap: 24px; justify-content: center; flex-wrap: wrap;
    }
    .hero-chip {
      font-family: 'Montserrat', sans-serif;
      font-size: .75rem; font-weight: 700;
      padding: 8px 20px; border-radius: 50px;
      background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.1);
      backdrop-filter: blur(10px);
      letter-spacing: .06em;
    }
    .hero-chip span { color: var(--orange); }

    /* ─── DIVIDER ─── */
    .divider {
      width: 80px; height: 3px; margin: 44px auto 0;
      background: linear-gradient(90deg, var(--blue), var(--teal), var(--lime));
      border-radius: 4px;
      animation: pulse 3s ease-in-out infinite;
    }
    @keyframes pulse { 0%,100%{opacity:.7;width:80px} 50%{opacity:1;width:140px} }

    /* ─── SECTION TITLE ─── */
    .section-title {
      font-family: 'League Spartan', sans-serif;
      font-size: clamp(1.1rem, 2.5vw, 1.45rem);
      font-weight: 700; letter-spacing: .04em; text-transform: uppercase;
      color: rgba(255,255,255,.4);
      margin: 60px 0 26px;
      display: flex; align-items: center; gap: 12px;
    }
    .section-title::after { content:''; flex:1; height:1px; background: linear-gradient(90deg,rgba(255,255,255,.15),transparent); }

    /* ─── GRID ─── */
    .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(310px, 1fr)); gap: 22px; }

    /* ─── CARD ─── */
    .card {
      position: relative;
      background: var(--card-bg);
      border: 1px solid rgba(255,255,255,.09);
      border-radius: 20px;
      padding: 30px 26px 26px;
      backdrop-filter: blur(18px);
      overflow: hidden;
      cursor: pointer;
      transition: transform .35s cubic-bezier(.22,1,.36,1), box-shadow .35s ease, border-color .35s ease;
      animation: fadeUp .6s cubic-bezier(.22,1,.36,1) both;
    }
    .card:hover {
      transform: translateY(-7px) scale(1.012);
      box-shadow: 0 24px 60px rgba(0,0,0,.45), 0 0 0 1px rgba(176,228,204,.3);
      border-color: rgba(176,228,204,.35);
    }

    /* stagger animation delays */
    .card:nth-child(1)  { animation-delay: .05s; }
    .card:nth-child(2)  { animation-delay: .10s; }
    .card:nth-child(3)  { animation-delay: .15s; }
    .card:nth-child(4)  { animation-delay: .20s; }
    .card:nth-child(5)  { animation-delay: .25s; }
    .card:nth-child(6)  { animation-delay: .30s; }
    .card:nth-child(7)  { animation-delay: .35s; }
    .card:nth-child(8)  { animation-delay: .40s; }
    .card:nth-child(9)  { animation-delay: .45s; }
    @keyframes fadeUp { from{opacity:0;transform:translateY(30px)} to{opacity:1;transform:none} }

    /* card glow sweep */
    .card::before {
      content: '';
      position: absolute; inset: 0;
      background: linear-gradient(120deg, transparent 30%, rgba(176,228,204,.07) 50%, transparent 70%);
      transform: translateX(-120%);
      transition: transform .6s ease;
      pointer-events: none;
    }
    .card:hover::before { transform: translateX(120%); }

    /* accent top bar */
    .card::after {
      content: '';
      position: absolute; top: 0; left: 0; right: 0; height: 3px;
      border-radius: 20px 20px 0 0;
      background: var(--accent, linear-gradient(90deg, var(--blue), var(--teal)));
      opacity: .8;
    }

    /* card accent colors per meeting */
    .c2  { --accent: linear-gradient(90deg,#285A48,#408A71); }
    .c3  { --accent: linear-gradient(90deg,#408A71,#B0E4CC); }
    .c4  { --accent: linear-gradient(90deg,#B0E4CC,#F6E7BC); }
    .c5  { --accent: linear-gradient(90deg,#FE7F2D,#408A71); }
    .c6  { --accent: linear-gradient(90deg,#FE7F2D,#FE7F2Dcc); }
    .c7  { --accent: linear-gradient(90deg,#285A48,#B0E4CC); }
    .c8  { --accent: linear-gradient(90deg,#8FABD4,#285A48); }
    .cuts{ --accent: linear-gradient(90deg,#F6E7BC,#B0E4CC); }
    .c10 { --accent: linear-gradient(90deg,#FE7F2D,#F6E7BC); }

    .card-header { display: flex; align-items: flex-start; gap: 14px; margin-bottom: 18px; }

    .card-icon {
      width: 50px; height: 50px; border-radius: 14px;
      display: grid; place-items: center;
      font-size: 1.5rem; flex-shrink: 0;
      background: rgba(255,255,255,.06);
      border: 1px solid rgba(255,255,255,.1);
    }

    .card-tag {
      font-family: 'Raleway', sans-serif;
      font-size: .62rem; font-weight: 700; letter-spacing: .18em; text-transform: uppercase;
      color: var(--teal); margin-bottom: 4px;
    }

    .card-title {
      font-family: 'League Spartan', sans-serif;
      font-size: 1.15rem; font-weight: 700; line-height: 1.2;
      color: #fff;
    }

    .card-desc {
      font-family: 'Poppins', sans-serif;
      font-size: .82rem; color: rgba(255,255,255,.55);
      line-height: 1.65; margin-bottom: 20px;
    }

    /* file pills */
    .files { display: flex; flex-wrap: wrap; gap: 7px; margin-bottom: 22px; }
    .file-pill {
      display: flex; align-items: center; gap: 5px;
      font-family: 'Montserrat', sans-serif;
      font-size: .67rem; font-weight: 700;
      padding: 5px 10px; border-radius: 50px;
      border: 1px solid rgba(255,255,255,.1);
      background: rgba(255,255,255,.05);
      color: rgba(255,255,255,.65);
      letter-spacing: .04em;
      transition: background .2s, color .2s;
    }
    .file-pill:hover { background: rgba(176,228,204,.15); color: var(--teal); }
    .file-pill.php  { border-color: rgba(176,228,204,.3); }
    .file-pill.html { border-color: rgba(254,127,45,.3); }
    .file-pill.css  { border-color: rgba(143,171,212,.5); }
    .file-pill.img  { border-color: rgba(246,231,188,.3); }

    /* card footer */
    .card-footer { display: flex; align-items: center; justify-content: space-between; }

    .status-dot {
      display: flex; align-items: center; gap: 6px;
      font-family: 'Poppins', sans-serif;
      font-size: .72rem; color: rgba(255,255,255,.4);
    }
    .dot { width: 7px; height: 7px; border-radius: 50%; background: var(--teal); animation: blink 2s ease-in-out infinite; }
    @keyframes blink { 0%,100%{opacity:.4} 50%{opacity:1} }

    .btn-open {
      font-family: 'Raleway', sans-serif;
      font-size: .72rem; font-weight: 700; letter-spacing: .1em; text-transform: uppercase;
      padding: 9px 18px; border-radius: 50px;
      background: linear-gradient(135deg, rgba(64,138,113,.35), rgba(176,228,204,.25));
      border: 1px solid rgba(176,228,204,.35);
      color: var(--teal);
      cursor: pointer; transition: all .25s ease;
      text-decoration: none;
    }
    .btn-open:hover {
      background: linear-gradient(135deg, var(--blue), var(--teal));
      color: #fff; border-color: transparent;
      box-shadow: 0 4px 20px rgba(176,228,204,.3);
    }

    /* ─── UTS SPECIAL CARD ─── */
    .uts-card {
      grid-column: 1 / -1;
      background: linear-gradient(135deg, rgba(40,90,72,.7) 0%, rgba(9,20,19,.8) 60%, rgba(176,228,204,.12) 100%);
      border: 1px solid rgba(176,228,204,.25);
      border-radius: 24px; padding: 38px 36px;
      backdrop-filter: blur(20px);
      position: relative; overflow: hidden;
      display: flex; align-items: center; gap: 32px; flex-wrap: wrap;
      animation: fadeUp .6s .05s both;
      transition: transform .35s ease, box-shadow .35s ease;
    }
    .uts-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 30px 70px rgba(0,0,0,.5), 0 0 0 1px rgba(246,231,188,.2);
    }
    .uts-card::after {
      content: '';
      position: absolute; top: 0; left: 0; right: 0; height: 4px;
      background: linear-gradient(90deg, var(--lime), var(--teal), var(--orange));
      border-radius: 24px 24px 0 0;
    }
    .uts-icon { font-size: 4rem; line-height: 1; }
    .uts-info { flex: 1; min-width: 220px; }
    .uts-label {
      font-family: 'Raleway', sans-serif;
      font-size: .7rem; font-weight: 700; letter-spacing: .22em; text-transform: uppercase;
      color: var(--lime); margin-bottom: 6px;
    }
    .uts-title {
      font-family: 'DM Serif Display', serif;
      font-size: clamp(1.6rem, 3vw, 2.3rem);
      line-height: 1.15; margin-bottom: 12px;
      background: linear-gradient(135deg, #fff 40%, var(--lime));
      -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    }
    .uts-desc {
      font-size: .85rem; color: rgba(255,255,255,.55); line-height: 1.6;
    }
    .uts-files { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 20px; }

    /* ─── STATS STRIP ─── */
    .stats {
      display: flex; gap: 18px; flex-wrap: wrap; margin: 52px 0 0;
    }
    .stat {
      flex: 1; min-width: 140px;
      background: rgba(255,255,255,.04);
      border: 1px solid rgba(255,255,255,.08);
      border-radius: 16px; padding: 20px 22px;
      backdrop-filter: blur(10px);
      transition: transform .25s ease;
    }
    .stat:hover { transform: translateY(-3px); }
    .stat-num {
      font-family: 'League Spartan', sans-serif;
      font-size: 2rem; font-weight: 900;
      background: linear-gradient(135deg, #fff, var(--teal));
      -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
    }
    .stat-label {
      font-family: 'Poppins', sans-serif;
      font-size: .75rem; color: rgba(255,255,255,.4); margin-top: 4px;
    }

    /* ─── FOOTER ─── */
    .footer {
      text-align: center; margin-top: 72px; padding-top: 28px;
      border-top: 1px solid rgba(255,255,255,.07);
      font-family: 'Poppins', sans-serif;
      font-size: .78rem; color: rgba(255,255,255,.25);
      line-height: 1.8;
    }
    .footer strong { color: rgba(176,228,204,.7); }

    /* ─── SCROLL REVEAL ─── */
    .reveal { opacity: 0; transform: translateY(24px); transition: opacity .6s ease, transform .6s ease; }
    .reveal.visible { opacity: 1; transform: none; }


  </style>
</head>
<body>

<div class="orb orb1"></div>
<div class="orb orb2"></div>
<div class="orb orb3"></div>

<div class="wrapper">

<!-- HERO -->
<header class="hero">
  <div class="badge">🎓 Praktikum Pemrograman Web</div>
  <h1>Portal Tugas<br>Praktikum</h1>

  <!-- BIODATA CARD -->
  <div class="biodata-card">
    <div class="biodata-label">👤 Identitas Mahasiswa</div>
    <div class="biodata-row">
      <span class="biodata-key">Nama</span>
      <span class="biodata-sep">:</span>
      <span class="biodata-val name">Dwiyandra Raysha Putra Syawal</span>
    </div>
    <div class="biodata-row">
      <span class="biodata-key">NPM</span>
      <span class="biodata-sep">:</span>
      <span class="biodata-val npm">2410631170069</span>
    </div>
    <div class="biodata-row">
      <span class="biodata-key">Kelas</span>
      <span class="biodata-sep">:</span>
      <span class="biodata-val">4B 🏫</span>
    </div>
    <div class="biodata-row">
      <span class="biodata-key">Prodi</span>
      <span class="biodata-sep">:</span>
      <span class="biodata-val">Informatika 💻</span>
    </div>
  </div>

  <div class="hero-meta">
    <div class="hero-chip">📅 Semester <span>Genap 2025/2026</span></div>
    <div class="hero-chip">💻 Pertemuan <span>2 — 10</span></div>
    <div class="hero-chip">🧩 Total File <span>30+</span></div>
  </div>
  <div class="divider"></div>
</header>

<!-- STATS -->
<div class="stats reveal">
    <div class="stat"><div class="stat-num">9</div><div class="stat-label">📦 Total Pertemuan</div></div>
    <div class="stat"><div class="stat-num">30+</div><div class="stat-label">📄 File Dikerjakan</div></div>
    <div class="stat"><div class="stat-num">4</div><div class="stat-label">🔧 Teknologi Digunakan</div></div>
    <div class="stat"><div class="stat-num">1</div><div class="stat-label">🏆 UTS Project</div></div>
</div>

<!-- PERTEMUAN SECTION -->
<div class="section-title reveal">📂 Daftar Pertemuan</div>

<div class="grid">

    <!-- PERTEMUAN 2 -->
    <div class="card c2 reveal">
    <div class="card-header">
        <div class="card-icon">🖼️</div>
        <div>
            <div class="card-tag">Pertemuan 2</div>
            <div class="card-title">HTML Dasar &amp; Gambar</div>
        </div>
    </div>
      <p class="card-desc">Pengenalan struktur HTML dasar dengan penggunaan elemen gambar, heading, paragraf, dan layout sederhana menggunakan file statis.</p>
      <div class="files">
        <span class="file-pill html">📄 index.html</span>
        <span class="file-pill img">🖼️ gw.jpg</span>
        <span class="file-pill img">🖼️ ray.jpg</span>
      </div>
      <div class="card-footer">
        <div class="status-dot"><div class="dot"></div> Selesai ✅</div>
        <a href="PERTEMUAN2/index.html" class="btn-open">Buka →</a>
      </div>
    </div>

    <!-- PERTEMUAN 3 -->
    <div class="card c3 reveal">
      <div class="card-header">
        <div class="card-icon">🔗</div>
        <div>
          <div class="card-tag">Pertemuan 3</div>
          <div class="card-title">HTML Lanjutan &amp; Struktur</div>
        </div>
      </div>
      <p class="card-desc">Pendalaman elemen HTML seperti tabel, list, link, form sederhana, dan struktur semantik halaman web.</p>
      <div class="files">
        <span class="file-pill html">📄 index.html</span>
      </div>
      <div class="card-footer">
        <div class="status-dot"><div class="dot"></div> Selesai ✅</div>
        <a href="PERTEMUAN3/index.html" class="btn-open">Buka →</a>
      </div>
    </div>

    <!-- PERTEMUAN 4 -->
    <div class="card c4 reveal">
      <div class="card-header">
        <div class="card-icon">🎨</div>
        <div>
          <div class="card-tag">Pertemuan 4</div>
          <div class="card-title">CSS Styling &amp; Layout</div>
        </div>
      </div>
      <p class="card-desc">Penerapan CSS untuk styling, warna, tipografi, box model, dan desain tata letak halaman menggunakan logo institusi.</p>
      <div class="files">
        <span class="file-pill html">📄 praktikum4.html</span>
        <span class="file-pill css">🎨 styling.css</span>
        <span class="file-pill img">🖼️ logounsika.png</span>
      </div>
      <div class="card-footer">
        <div class="status-dot"><div class="dot"></div> Selesai ✅</div>
        <a href="PERTEMUAN4/praktikum4.html" class="btn-open">Buka →</a>
      </div>
    </div>

    <!-- PERTEMUAN 5 -->
    <div class="card c5 reveal">
      <div class="card-header">
        <div class="card-icon">⚡</div>
        <div>
          <div class="card-tag">Pertemuan 5</div>
          <div class="card-title">CSS Lanjutan &amp; Responsif</div>
        </div>
      </div>
      <p class="card-desc">Penggunaan Flexbox, Grid, media query, dan animasi CSS untuk menciptakan tampilan yang responsif dan dinamis.</p>
      <div class="files">
        <span class="file-pill html">📄 pertemuan5.html</span>
        <span class="file-pill css">🎨 style.css</span>
      </div>
      <div class="card-footer">
        <div class="status-dot"><div class="dot"></div> Selesai ✅</div>
        <a href="PERTEMUAN5/pertemuan5.html" class="btn-open">Buka →</a>
      </div>
    </div>

    <!-- PERTEMUAN 6 -->
    <div class="card c6 reveal">
      <div class="card-header">
        <div class="card-icon">🐘</div>
        <div>
          <div class="card-tag">Pertemuan 6</div>
          <div class="card-title">Pengantar PHP &amp; Perhitungan</div>
        </div>
      </div>
      <p class="card-desc">Pengenalan bahasa PHP, sintaks dasar, variabel, operator, dan pembuatan program perhitungan aritmatika sederhana.</p>
      <div class="files">
        <span class="file-pill php">🐘 perhitungan.php</span>
      </div>
      <div class="card-footer">
        <div class="status-dot"><div class="dot"></div> Selesai ✅</div>
        <a href="PERTEMUAN6/perhitungan.php" class="btn-open">Buka →</a>
      </div>
    </div>

    <!-- PERTEMUAN 7 -->
    <div class="card c7 reveal">
      <div class="card-header">
        <div class="card-icon">🔀</div>
        <div>
          <div class="card-tag">Pertemuan 7</div>
          <div class="card-title">PHP Kontrol Alur &amp; Latihan</div>
        </div>
      </div>
      <p class="card-desc">Struktur kontrol PHP: kondisional (if/else/switch) dan perulangan (for/while/foreach), dengan dua sub-latihan terstruktur.</p>
      <div class="files">
        <span class="file-pill php">🐘 index.php</span>
        <span class="file-pill">📁 Latihan1/</span>
        <span class="file-pill">📁 Latihan2/</span>
      </div>
      <div class="card-footer">
        <div class="status-dot"><div class="dot"></div> Selesai ✅</div>
        <a href="PERTEMUAN7/index.php" class="btn-open">Buka →</a>
      </div>
    </div>

    <!-- PERTEMUAN 8 -->
    <div class="card c8 reveal">
      <div class="card-header">
        <div class="card-icon">🧬</div>
        <div>
          <div class="card-tag">Pertemuan 8</div>
          <div class="card-title">OOP PHP &amp; Class/Object</div>
        </div>
      </div>
      <p class="card-desc">Pemrograman Berorientasi Objek dengan PHP: class, object, inheritance pada studi kasus hewan dan kendaraan beserta logika ganjil-genap.</p>
      <div class="files">
        <span class="file-pill php">🐘 hewan.php</span>
        <span class="file-pill php">🐘 kendaraan.php</span>
        <span class="file-pill php">🐘 ganjil_genap.php</span>
        <span class="file-pill php">🐘 genap.php</span>
        <span class="file-pill php">🐘 Tampilan.php</span>
        <span class="file-pill css">🎨 style.css</span>
      </div>
      <div class="card-footer">
        <div class="status-dot"><div class="dot"></div> Selesai ✅</div>
        <a href="PERTEMUAN8/Tampilan.php" class="btn-open">Buka →</a>
      </div>
    </div>

    <!-- PERTEMUAN 10 -->
    <div class="card c10 reveal">
      <div class="card-header">
        <div class="card-icon">🗄️</div>
        <div>
          <div class="card-tag">Pertemuan 10</div>
          <div class="card-title">CRUD PHP &amp; MySQL</div>
        </div>
      </div>
      <p class="card-desc">Sistem manajemen buku dan transaksi berbasis CRUD lengkap: Create, Read, Update, Delete dengan koneksi database MySQL dan navigasi multi-halaman.</p>
      <div class="files">
        <span class="file-pill php">🐘 index.php</span>
        <span class="file-pill php">🐘 tambah_buku.php</span>
        <span class="file-pill php">🐘 transaksi.php</span>
        <span class="file-pill php">🐘 form_edit.php</span>
        <span class="file-pill php">🐘 lihat_transaksi.php</span>
        <span class="file-pill php">🐘 koneksi_db.php</span>
        <span class="file-pill php">🐘 proses_*.php</span>
        <span class="file-pill php">🐘 nav.php</span>
      </div>
      <div class="card-footer">
        <div class="status-dot"><div class="dot"></div> Selesai ✅</div>
        <a href="PERTEMUAN10/index.php" class="btn-open">Buka →</a>
      </div>
    </div>

  </div><!-- /grid -->

  <!-- UTS SPECIAL -->
  <div class="section-title reveal">🏆 Ujian Tengah Semester</div>

  <div class="uts-card reveal">
    <div class="uts-icon">🎯</div>
    <div class="uts-info">
      <div class="uts-label">UTS — Ujian Tengah Semester</div>
      <div class="uts-title">Project Web<br>Terintegrasi</div>
      <p class="uts-desc">Project UTS yang menggabungkan logika PHP, tampilan HTML yang terstruktur, dan styling CSS profesional dalam satu aplikasi web yang komprehensif dan terintegrasi. 💎</p>
      <div class="uts-files">
        <span class="file-pill php">🐘 Logic.php</span>
        <span class="file-pill html">📄 Tampilan.html</span>
        <span class="file-pill css">🎨 styling.css</span>
      </div>
    </div>
    <a href="UTS/Tampilan.html" class="btn-open" style="align-self:center; font-size:.8rem; padding:12px 26px;">
      Buka Project UTS →
    </a>
  </div>

  <!-- FOOTER -->
  <footer class="footer reveal">
    <p>🎓 Dibuat dengan dedikasi &amp; semangat belajar</p>
    <p>Praktikum Pemrograman Web · <strong>2025/2026</strong></p>
    <p style="margin-top:8px; font-size:.68rem; opacity:.5;">HTML · CSS · PHP · MySQL · OOP 💙</p>
  </footer>

</div><!-- /wrapper -->

<script>
// scroll reveal
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); } });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // card 3D tilt
  document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mousemove', e => {
      const r = card.getBoundingClientRect();
      const x = (e.clientX - r.left) / r.width  - .5;
      const y = (e.clientY - r.top)  / r.height - .5;
      card.style.transform = `translateY(-7px) scale(1.012) rotateX(${-y*6}deg) rotateY(${x*6}deg)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
</script>
</body>
</html>