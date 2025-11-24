<?php  
// pelayanan.php - Halaman Pelayanan SKCK Probolinggo
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan SKCK Probolinggo</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;

            /* Background cerah & lembut */
            background: url('gambar3.jpeg') center/cover no-repeat fixed;
            filter: brightness(1.40) contrast(1.10);

            color: #000;
        }

        /* LAYER PUTIH HALUS */
        .overlay {
            position: fixed;
            inset: 0;
            background: rgba(255,255,255,0.25);
            backdrop-filter: blur(2px);
            z-index: 0;
        }

        /* HEADER */
        .header {
            text-align: center;
            padding: 65px 20px;
            background: rgba(255,255,255,0.93);
            backdrop-filter: blur(4px);
            border-bottom: 1px solid #dcdcdc;
            position: relative;
            z-index: 2;
        }

        .header h1 {
            font-size: 36px;
            font-weight: 800;
            margin: 0;
            color: #0a2c63;
            text-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .header p {
            margin-top: 10px;
            font-size: 17px;
            opacity: 0.85;
        }

        /* CONTAINER KONTEN */
        .container {
            max-width: 950px;
            margin: 50px auto;
            background: rgba(255,255,255,0.94);
            border-radius: 22px;
            padding: 45px 50px;
            box-shadow: 0 6px 25px rgba(0,0,0,0.12);
            position: relative;
            z-index: 2;
        }

        h2 {
            font-size: 23px;
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 15px;
            color: #0a2c63;
            border-left: 6px solid #007b4e;
            padding-left: 12px;
        }

        .container p {
            font-size: 16.5px;
            line-height: 1.75;
            margin-bottom: 15px;
            color: #222;
        }

        /* BOX KONTAK */
        .kontak {
            background: #f4f8ff;
            padding: 25px 28px;
            border-radius: 18px;
            border: 1px solid #c6d8fb;
            margin-top: 25px;
        }

        .kontak p {
            display: flex;
            align-items: center;
            font-size: 17px;
            margin: 14px 0;
            font-weight: 500;
        }

        /* IKON KONTAK */
        .ikon {
            width: 34px;
            height: 34px;
            border-radius: 7px;
            margin-right: 14px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.25);
        }

        /* BUTTON BACK */
        .btn-beranda {
            display: inline-block;
            background: #0d47a1;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 14px;
            font-size: 17px;
            font-weight: 600;
            margin-top: 35px;
            box-shadow: 0 5px 18px rgba(0,0,0,0.25);
            transition: 0.25s ease;
        }

        .btn-beranda:hover {
            background: #1565c0;
            transform: translateY(-3px);
            box-shadow: 0 6px 24px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body>

<div class="overlay"></div>

<!-- HEADER -->
<div class="header">
    <h1>Pelayanan & Pengaduan SKCK Polres Probolinggo</h1>
    <p>Informasi Layanan • Kontak Resmi • Media Sosial</p>
</div>

<!-- BOX KONTEN -->
<div class="container">

    <h2>Layanan Pengaduan SKCK</h2>
    <p>
        Halaman ini menyediakan informasi lengkap terkait pengaduan SKCK Polres Probolinggo,
        termasuk nomor kontak resmi, media sosial. Gunakan layanan pengaduan ini apabila Anda membutuhkan bantuan atau
        ingin menyampaikan pengaduan terkait pelayanan SKCK.
    </p>

    <h2>Kontak Resmi SKCK Probolinggo</h2>

    <div class="kontak">

        <p>
            <img src="whatsapp1.jpeg" class="ikon">
            <b>Telepon / WhatsApp:</b>&nbsp; +62 85336338838
        </p>

        <p>
            <img src="instagram2.jpeg" class="ikon">
            <b>Instagram:</b>&nbsp; skckprobolinggo
        </p>

        <p>
            <img src="Facebook3.jpeg" class="ikon">
            <b>Facebook:</b>&nbsp; Skck Probolinggo
        </p>

        <p>
            <img src="Email4.jpeg" class="ikon">
            <b>Email:</b>&nbsp; ikresprob@gmail.com
        </p>

    </div>

    <!-- BUTTON -->
    <a href="index.php" class="btn-beranda">⟵ Kembali ke Beranda</a>

</div>

</body>
</html>
