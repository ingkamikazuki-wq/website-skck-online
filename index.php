<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SKCK Online - Polres Probolinggo</title>

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', Arial, sans-serif;
      height: 100vh;
      overflow-x: hidden;
      color: white;
    }

    /* === BACKGROUND SLIDER === */
    .slider-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background-size: cover;
      background-position: center;
      z-index: -1;
      animation: zoomBG 10s ease-in-out infinite alternate,
                 gantiFoto 12s linear infinite;
    }

    @keyframes zoomBG {
      0% { transform: scale(1); }
      100% { transform: scale(1.2); }
    }

    @keyframes gantiFoto {
      0%   { background-image: url('gambar_1.jpeg'); }
      50%  { background-image: url('gambar_2.jpeg'); }
      100% { background-image: url('gambar_1.jpeg'); }
    }

    /* LAYER GELAP */
    .overlay {
      background: rgba(61, 61, 61, 0.06);
      width: 100%;
      min-height: 100vh;
      padding: 20px;
      backdrop-filter: blur(2px);
    }

    /* BOX UTAMA */
    .container {
      max-width: 920px;
      margin: auto;
      padding: 25px;
      background: rgba(0, 0, 0, 0.35);
      border-radius: 15px;
      box-shadow: 0 0 12px rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(5px);
      margin-bottom: 25px;
    }

    /* JUDUL UTAMA */
    h2 {
      text-align: center;
      text-shadow: 3px 3px 8px black;
      font-size: 48px;
      letter-spacing: 1px;
      margin-bottom: 5px;
      color: #e6e6e6;
    }

    /* SUBTITLE */
    .sub-title {
      text-align: center;
      font-size: 34px;
      font-weight: 800;
      letter-spacing: 1px;
      margin-top: -10px;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.8);
    }

    /* BUTTON MENU */
    .btn {
      display: inline-block;
      background: #12ff4f;
      padding: 14px 22px;
      border-radius: 10px;
      text-decoration: none;
      font-weight: bold;
      font-size: 17px;
      color: #000;
      transition: 0.3s;
      margin: 8px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.5);
    }

    .btn:hover {
      background: #ffe45c;
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.6);
    }

    /* CARD INFORMASI */
    .card {
      background: rgba(255,255,255,0.12);
      padding: 18px;
      border-radius: 12px;
      margin-top: 18px;
      backdrop-filter: blur(5px);
      box-shadow: 0 0 18px rgba(0,0,0,0.35);
      color: #fff;
    }

    .card h3 {
      text-align: center;
      font-size: 26px;
      color: #a2f7a6;
      text-shadow: 2px 2px 6px black;
    }

    .card ul {
      font-size: 18px;
      margin-left: 20px;
      line-height: 1.6;
    }

    /* BIAYA */
    .stamp {
      display: inline-block;
      padding: 12px 25px;
      border: 4px dashed #ff3925;
      font-size: 26px;
      border-radius: 12px;
      color: #ffee59;
      font-weight: bold;
      margin-top: 10px;
      text-shadow: 2px 2px 4px black;
    }

    /* LOGO FIX */
    .logo-left {
      position: fixed;
      top: 20px;
      left: 20px;
      z-index: 9999;
    }

    .logo-left img {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      border: 3px solid rgba(0,0,0,0.5);
      background: rgba(255,255,255,0.25);
      padding: 5px;
      box-shadow: 0 0 15px black;
    }

    /* FOOTER */
    footer {
      text-align: center;
      padding: 20px;
      font-size: 14px;
      background: rgba(0, 0, 0, 0.45);
      color: #eee;
      text-shadow: 1px 1px 3px black;
      border-top: 1px solid rgba(255,255,255,0.2);
      margin-top: 30px;
    }
  </style>
</head>
<body>

<!-- BACKGROUND -->
<div class="slider-bg"></div>

<!-- LOGO -->
<div class="logo-left">
  <img src="logo_porli.jpeg" alt="Logo Polri">
</div>

<!-- LAYER UTAMA -->
<div class="overlay">

  <div class="container">
    <h2>LAYANAN SKCK ONLINE</h2>

    <p class="sub-title">POLRES PROBOLINGGO</p>

    <center>
      <a href="persyaratan.php" class="btn">Persyaratan</a>
      <a href="prosedur.php" class="btn">Prosedur</a>
      <a href="daftar_baru.php" class="btn">Daftar SKCK Online</a>
      <a href="pelayanan.php" class="btn">Pelayanan Pengaduan</a>
      <a href="informasi.php" class="btn">Informasi</a>
    </center>
  </div>

  <div class="container">

    <div class="card">
      <h3>Informasi SKCK</h3>
      <p>
        SKCK (Surat Keterangan Catatan Kepolisian) adalah dokumen resmi yang berisi data catatan kriminal seseorang.
        Pendaftaran kini dapat dilakukan secara online melalui aplikasi Super App Polri yang sudah tersedia di Playstore maupun Appstore.
      </p>
    </div>

    <div class="card">
      <h3>Jadwal Pelayanan</h3>
      <ul>
        <li>Senin – Jumat</li>
        <li>Pukul 08.00 – 14.00 WIB</li>
      </ul>
    </div>

    <div class="card">
      <h3>Fasilitas Pelayanan</h3>
      <ul>
        <li>Ruang ber-AC</li>
        <li>WiFi gratis</li>
        <li>Air minum & permen</li>
        <li>Area bermain anak</li>
      </ul>
    </div>

    <div class="card" style="text-align:center;">
      <h3>Biaya Resmi SKCK</h3>
      <div class="stamp">Rp 30.000</div>
      <p style="margin-top:10px;">(Sesuai ketentuan PNBP POLRI)</p>
    </div>

  </div>

</div>

<footer>
  © 2025 / 2026 <span>SKCK Online Polres Probolinggo</span> — Layanan Resmi Informasi SKCK
</footer>

</body>
</html>
