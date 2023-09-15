<!DOCTYPE html>
<html>
<head>
    <title>Menu Sekolah</title>
    <style>
        body {
            background-color: #fff;
        }

        /* Gaya CSS untuk kotak menu */
        .manajemen-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .manajemen-box {
            width: 250px; /* Ubah lebar menjadi 100% agar elemen penuh lebar */
            height: 100px;
            background-color: #fff; /* Latar belakang putih */
            color: #000; /* Warna teks hitam */
            text-align: left; /* Konten rata kiri */
            margin: 10px;
            font-size: 18px;
            border: 1px solid rgba(0, 0, 0, 0.3); /* Border dengan lebar 1px dan warna hitam */
            border-radius: 5px;
            display: flex;
            flex-direction: row; /* Menjadikan tata letak horizontal */
            justify-content: space-between; /* Konten berada di tengah secara horizontal */
            align-items: center; /* Konten berada di tengah secara vertikal */
            padding: 20px; /* Ruang kosong di sekitar konten */
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer; /* Mengubah kursor saat di atasnya */
            text-decoration: none; /* Menghilangkan garis bawah teks dalam elemen anchor */
        }

        /* Gaya CSS untuk logo medali */
        .manajemen-logo {
            width: 80px; /* Lebar logo */
            height: auto; /* Tinggi logo menyesuaikan */
            margin-left: 9px; /* Ruang kosong di kiri logo */
        }

        /* Gaya CSS untuk judul */
        .manajemen-title {
            font-weight: bold;
            font-size: 20px;
        }

        /* Gaya CSS untuk deskripsi */
        .manajemen-description {
            font-size: 16px;
            text-align: justify;
            padding-top: 2px;
        }

        /* Media query untuk mengubah tata letak saat lebar layar lebih kecil */
        /* Media query untuk mengubah tampilan vertikal hanya saat layar sangat kecil */
@media (max-width: 600px) {
    .manajemen-box {
        flex-direction: row; /* Mengembalikan tata letak horizontal */
        align-items: center; /* Mengatur konten ke tengah secara vertikal */
    }
    .manajemen-description {
        font-size: 14px; /* Mengurangi ukuran font deskripsi untuk mengakomodasi ruang yang lebih sempit */
        margin-top: 10px; /* Menambahkan sedikit ruang atas untuk memisahkan deskripsi */
    }
}

    </style>
</head>
<body>
    <div class="manajemen-container">
        <a href="#" class="manajemen-box">
            <div>
                <div class="manajemen-title">Ketua Kompetensi Keahlian</div>
                <div class="manajemen-description">Ketua jurusan untuk masing-masing program keahlian</div>
            </div>
            <img src="image/ketuak.gif" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
        </a>
        <a href="#" class="manajemen-box">
            <div>
                <div class="manajemen-title">Tim Manajemen</div>
                <div class="manajemen-description">Kepala sekolah, kasubag TU, dan wakil kepala</div>
            </div>
            <img src="image/manajemen.png" alt="foto" class="manajemen-logo"> <!-- Ganti "medal.png" dengan URL atau path ke logo medali -->
        </a>
       
    </div>
</body>
</html>