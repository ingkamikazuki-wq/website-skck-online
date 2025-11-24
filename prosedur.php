<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Prosedur Membuat SKCK Full Online</title>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;

        /* 🔥 Background foto cerah */
        background: url('gambar3.jpeg') center/cover no-repeat fixed;
        filter: brightness(1.35) contrast(1.12);
        color: #000;
    }

    /* LAYER PUTIH HALUS DI ATAS GAMBAR */
    .overlay {
        position: fixed;
        inset: 0;
        background: rgba(255,255,255,0.30);
        backdrop-filter: blur(2px);
        z-index: 0;
    }

    .container {
        max-width: 900px;
        margin: 55px auto;
        padding: 20px;
        position: relative;
        z-index: 2;
    }

    /* Judul */
    .judul {
        text-align: center;
        background: rgba(0,168,89,0.92);
        color: white;
        padding: 22px;
        border-radius: 16px;
        font-size: 28px;
        font-weight: 800;
        box-shadow: 0 5px 18px rgba(0,0,0,0.25);
        letter-spacing: 1px;
        text-transform: uppercase;
        backdrop-filter: blur(2px);
    }

    /* Card */
    .card {
        background: rgba(255,255,255,0.94);
        margin-top: 35px;
        padding: 32px;
        border-radius: 18px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.18);
        border-left: 8px solid #00a859;
        animation: fadeIn 0.7s ease;
        backdrop-filter: blur(2px);
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .card h3 {
        background: #00994c;
        color: white;
        padding: 12px;
        text-align: center;
        border-radius: 12px;
        font-size: 23px;
        margin-top: 0;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    /* Step format */
    .step {
        background: #f3fff7;
        padding: 18px;
        border-left: 6px solid #00a859;
        border-radius: 12px;
        margin-bottom: 18px;
        line-height: 1.7;
        font-size: 16px;
        transition: 0.3s;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }

    .step:hover {
        background: #e9fff1;
        transform: translateX(5px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.12);
    }

    .step b {
        color: #007f3f;
        font-size: 17px;
    }

    /* Tombol kembali */
    .btn-back {
        display: block;
        width: 100%;
        text-align: center;
        background: #00a859;
        color: white;
        padding: 15px;
        margin-top: 35px;
        border-radius: 12px;
        font-size: 20px;
        text-decoration: none;
        font-weight: 700;
        transition: 0.3s;
        box-shadow: 0 6px 18px rgba(0,0,0,0.22);
    }

    .btn-back:hover {
        background: #00994c;
        transform: scale(1.03);
    }
</style>

</head>
<body>

<div class="overlay"></div>

<div class="container">

    <div class="judul">
        PROSEDUR MEMBUAT SKCK FULL ONLINE
    </div>

    <div class="card">
        <h3>Langkah-Langkah Pembuatan SKCK Online</h3>

        <div class="step">
            <b>1. Instal aplikasi “POLRI Super App”.</b><br>
            - Login menggunakan email / nomor HP.<br>
            - Jika belum punya akun, daftar lalu verifikasi NIK dulu.
        </div>

        <div class="step">
            <b>2. Pilih menu "SKCK".</b><br>
            Isi data lengkap: NIK, identitas diri, foto, BPJS/KIS, Akta / Ijazah, dan KK.
        </div>

        <div class="step">
            <b>3. Lakukan pembayaran SKCK Online.</b><br>
            Pembayaran via BRIVA / Virtual Account.<br>
            Biaya resmi: <b>Rp 30.000</b>.
        </div>

        <div class="step">
            <b>4. Datang ke Polres sesuai lokasi pengambilan.</b><br>
            Bisa diambil sendiri atau diwakilkan dengan membawa surat kuasa.
        </div>

        <a href="index.php" class="btn-back">⬅ Kembali ke Beranda</a>

    </div>

</div>

</body>
</html>
