<?php
// daftar_baru.php (Tampilan Baru Modern)
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Baru | SKCK Online</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('gambar3.jpeg') center/cover no-repeat fixed;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
      overflow: hidden;
    }

    /* Overlay Gelap */
    .overlay {
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.45);
      backdrop-filter: blur(4px);
      z-index: 0;
    }

    /* Background di belakang card */
    .bg-behind {
      position: absolute;
      width: 380px;
      height: 380px;
      background: url('gambar3.jpeg') center/cover no-repeat;
      opacity: 0.25;
      filter: blur(3px);
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 1;  /* Di belakang card, di depan overlay */
      pointer-events: none;
    }

    /* Logo */
    .logo {
      position: fixed;
      top: 20px;
      left: 20px;
      z-index: 10;
    }

    .logo img {
      width: 95px;
      height: 95px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid #ffd54f;
      box-shadow: 
          0 0 10px rgba(0,0,0,0.6),
          0 0 18px rgba(255,215,0,0.5);
      background: #fff;
    }

    /* Card utama */
    .card {
      position: relative;
      z-index: 2;
      width: 92%;
      max-width: 430px;
      background: rgba(255, 255, 255, 0.15);
      padding: 35px 30px;
      border-radius: 18px;
      backdrop-filter: blur(10px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.35);
      text-align: center;
      border: 1px solid rgba(255,255,255,0.2);
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      margin: 0 0 22px;
      font-size: 24px;
      font-weight: 700;
      color: #ffeb3b;
      text-shadow: 0 2px 5px rgba(0,0,0,0.6);
    }

    .btn {
      display: block;
      background: linear-gradient(90deg, #ffca28, #ffb300);
      color: #000;
      padding: 14px 20px;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 700;
      margin-bottom: 18px;
      font-size: 16px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.35);
      transition: 0.25s;
    }

    .btn:hover {
      transform: scale(1.06);
      box-shadow: 0 6px 18px rgba(0,0,0,0.5);
    }

    p {
      font-size: 14px;
      color: #f5f5f5;
      margin-bottom: 18px;
      line-height: 1.5;
      text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }

    .back {
      display: inline-block;
      background: rgba(255,255,255,0.2);
      padding: 10px 25px;
      border-radius: 25px;
      text-decoration: none;
      color: #fff;
      font-weight: 600;
      font-size: 14px;
      transition: 0.25s;
      border: 1px solid rgba(255,255,255,0.3);
    }

    .back:hover {
      background: rgba(255,255,255,0.35);
    }

    footer {
      position: fixed;
      bottom: 10px;
      width: 100%;
      text-align: center;
      font-size: 14px;
      color: #fff;
      text-shadow: 0 2px 4px black;
      z-index: 5;
    }

    footer span {
      color: #ffeb3b;
      font-weight: 700;
    }

  </style>
</head>

<body>

  <div class="overlay"></div>

  <!-- Background Tambahan di belakang card -->
  <div class="bg-behind"></div>

  <!-- Logo -->
  <div class="logo">
    <img src="logo_porli.jpeg" alt="Logo Polri">
  </div>

  <!-- Card -->
  <div class="card">
    <h2>Pendaftaran SKCK Online</h2>

    <a href="https://skck-online.polri.go.id/" target="_blank" class="btn">
      Daftar SKCK Resmi
    </a>

    <p>
      Anda akan diarahkan ke website resmi <b>POLRI</b> untuk melakukan proses pendaftaran SKCK secara online.
    </p>

    <a href="index.php" class="back">⬅ Kembali ke Beranda</a>
  </div>

  <footer>
    © 2025 / 2026 <span>SKCK Online Polresta Sidoarjo</span> — Layanan Resmi Informasi SKCK
  </footer>

</body>
</html>
