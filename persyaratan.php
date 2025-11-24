<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Persyaratan SKCK Full Online</title>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;

        background: url('gambar3.jpeg') center/cover no-repeat fixed;
        filter: brightness(1.25) contrast(1.08);

        color: #000;
    }

    .overlay {
        position: fixed;
        inset: 0;
        background: rgba(255,255,255,0.40);
        backdrop-filter: blur(3px);
        z-index: 0;
    }

    .container {
        max-width: 780px;
        margin: 70px auto;
        padding: 0 20px;
        position: relative;
        z-index: 2;
    }

    /* BANNER BARU */
    .banner-warning {
        width: 100%;
        background: url('bg_warning.jpg') center/cover no-repeat;
        padding: 40px 10px;
        text-align: center;
        border-radius: 14px;
        margin-bottom: 35px;
    }

    .banner-inner {
        background: rgba(0,0,0,0.45);
        padding: 20px 30px;
        border-radius: 10px;
        display: inline-block;
    }

    .banner-inner h2 {
        margin: 0;
        font-size: 26px;
        font-weight: 700;
        color: #ffffff;
    }

    .banner-inner h1 {
        margin-top: 8px;
        font-size: 34px;
        font-weight: 800;
        color: #00ff55;
    }

    /* Card */
    .card {
        background: rgba(255,255,255,0.88);
        padding: 30px 25px;
        border-radius: 18px;
        border: 1px solid #d7eede;
    }

    .card h3 {
        text-align: center;
        margin: 0 0 22px 0;
        background: #00a859;
        padding: 14px;
        color: white;
        border-radius: 10px;
        font-weight: 600;
        letter-spacing: 0.5px;
        font-size: 20px;
    }

    .list-box {
        margin-top: 15px;
    }

    .item {
        display: flex;
        align-items: center;
        background: #f7fff9;
        padding: 12px;
        border-radius: 12px;
        border: 1.5px solid #c9ebd6;
        margin-bottom: 12px;
        transition: 0.25s ease;
    }

    .item:hover {
        background: #eefdf2;
        transform: translateX(6px);
    }

    .icon {
        width: 62px;
        height: 62px;
        object-fit: cover;
        margin-right: 16px;
        border-radius: 10px;
        border: 2px solid #00a859;
        background: white;
        padding: 4px;
    }

    .item p {
        margin: 0;
        font-size: 15px;
        color: #003d1f;
        line-height: 1.4;
    }

    .item b {
        font-size: 16px;
        color: #006a34;
    }

    .btn-back {
        display: block;
        margin-top: 28px;
        padding: 15px;
        background: #00a859;
        text-align: center;
        border-radius: 12px;
        color: white;
        text-decoration: none;
        font-size: 18px;
        font-weight: 600;
        transition: 0.25s ease;
    }

    .btn-back:hover {
        background: #008c46;
        transform: scale(1.03);
    }
</style>
</head>

<body>

<div class="overlay"></div>

<div class="container">

    <!-- BANNER BARU -->
    <div class="banner-warning">
        <div class="banner-inner">
            <h2>Persyaratan & Prosedur Pembuatan</h2>
            <h1>SKCK Full Online</h1>
        </div>
    </div>

    <div class="card">
        <h3>Persyaratan Dokumen (Soft File HP)</h3>

        <div class="list-box">

            <div class="item">
                <img src="foto.png" class="icon">
                <p><b>Pasfoto Berwarna</b><br>Latar merah, pakaian rapi</p>
            </div>

            <div class="item">
                <img src="foto_BPJS.jpeg" class="icon">
                <p><b>Kartu BPJS / KIS</b></p>
            </div>

            <div class="item">
                <img src="kartu_kelahiran.jpeg" class="icon">
                <p><b>Akte Kelahiran</b></p>
            </div>

            <div class="item">
                <img src="kk.jpeg" class="icon">
                <p><b>Kartu Keluarga (KK)</b></p>
            </div>

            <div class="item">
                <img src="ijazah.jpeg" class="icon">
                <p><b>Ijazah Terakhir</b></p>
            </div>

        </div>

        <a href="index.php" class="btn-back">⬅ Kembali ke Beranda</a>

    </div>

</div>

</body>
</html>
