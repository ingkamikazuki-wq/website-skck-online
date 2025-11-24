<?php  
// informasi.php - Halaman Informasi SKCK Probolinggo
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi SKCK Probolinggo</title>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        background: url('gambar3.jpeg') center/cover no-repeat fixed;
        color: #000;
    }

    .overlay {
        position: fixed;
        inset: 0;
        background: rgba(255, 255, 255, 0);
        backdrop-filter: blur(3px);
        z-index: 0;
    }

    .header {
        text-align: center;
        padding: 55px 20px;
        background: rgba(255, 247, 247, 0.79);
        backdrop-filter: blur(4px);
        border-bottom: 1px solid #dcdcdce5;
        position: relative;
        z-index: 2;
    }

    .header h1 {
        font-size: 32px;
        font-weight: 800;
        margin: 0;
        color: #0a2c63;
    }

    .header p {
        margin-top: 8px;
        font-size: 16px;
        opacity: 0.85;
    }

    .container {
        max-width: 900px;
        margin: 40px auto;
        background: rgba(255, 255, 255, 0.93);
        border-radius: 20px;
        padding: 40px 45px;
        box-shadow: 0 6px 25px rgba(0,0,0,0.12);
        position: relative;
        z-index: 2;
    }

    h2 {
        font-size: 23px;
        font-weight: 700;
        color: #0a2c63;
        margin-bottom: 15px;
        border-left: 6px solid #00b894;
        padding-left: 12px;
    }

    p {
        line-height: 1.6;
        font-size: 17px;
        color: #0c254d;
        margin-bottom: 25px;
    }

    /* Card Kontak */
    .kontak p {
        display: flex;
        align-items: center;
        margin: 14px 0;
        font-size: 17px;
        font-weight: 500;
        color: #0c254d;
    }

    .ikon {
        width: 38px;
        height: 38px;
        margin-right: 14px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.25);
        object-fit: cover;
    }

    .divider {
        width: 100%;
        height: 1px;
        background: #d3d3d3;
        margin: 30px 0;
        opacity: 0.6;
    }

    .btn-beranda {
        display: inline-block;
        background: #0d47a1;
        color: white;
        padding: 14px 30px;
        text-decoration: none;
        border-radius: 12px;
        font-size: 16px;
        font-weight: 600;
        margin-top: 25px;
        transition: 0.25s;
    }

    .btn-beranda:hover {
        background: #1565c0;
        transform: translateY(-3px);
    }
</style>

</head>

<body>

<div class="overlay"></div>

<!-- HEADER -->
<div class="header">
    <h1>Informasi Resmi SKCK Polres Probolinggo</h1>
    <p>Persyaratan • Prosedur • Pengaduan • Kontak Pelayanan</p>
</div>

<!-- CONTAINER KONTEN -->
<div class="container">

    <h2>Informasi Pertanyaan Terkait SKCK</h2>
    <p>
        Jika terdapat informasi yang belum jelas atau Anda memerlukan penjelasan lebih lanjut mengenai 
        persyaratan, prosedur pembuatan SKCK, jadwal pelayanan, maupun keterangan lainnya, silakan 
        menghubungi kontak resmi yang tersedia. Petugas kami siap memberikan bantuan serta informasi 
        yang akurat untuk memastikan pelayanan berjalan lancar dan sesuai ketentuan.
    </p>

    <div class="divider"></div>

    <h2>Kontak Resmi yang Bisa Anda Hubungi</h2>

    <div class="kontak">
       <p>
            <img src="whatsapp1.jpeg" class="ikon">
            <b>Telepon / WhatsApp:</b>
            <br>&nbsp;&nbsp;&nbsp;&nbsp;• +62 821-4360-3135  
            <br>&nbsp;&nbsp;&nbsp;&nbsp;• +62 812-3484-312
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
            <b>Email:</b>&nbsp; skckpolresprobolinggo@gmail.com
        </p>
    </div>

    <a href="index.php" class="btn-beranda">⟵ Kembali ke Beranda</a>

</div>

</body>
</html>
