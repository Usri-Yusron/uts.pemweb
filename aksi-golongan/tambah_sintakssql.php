<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$jenis_golongan = $_POST['golongan'];
$harga = $_POST['harga'];

// menginput data ke database
if (mysqli_query($koneksi, "INSERT INTO `golongan_harga` (`id_golongan`, `jenis_golongan`, `harga`) VALUES ('', '$jenis_golongan', '$harga')")) {
    // Jika berhasil, alihkan ke halaman yang diinginkan
    header("location: ../dashboard-admin/golongan.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo '<script type="text/javascript">';
    echo 'alert("Gagal menambahkan data. Silakan coba lagi.");';
    echo 'window.location = "tambahtagihan.php";'; // Ganti dengan halaman sebelumnya
    echo '</script>';
}
?>
