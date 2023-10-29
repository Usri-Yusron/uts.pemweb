<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama_pelanggan'];
$harga = $_POST['harga'];
$status_pembayaran = $_POST['riwayat_tagihan'];
$tanggal_pembayaran = $_POST['tanggal_dibayar'];

// menginput data ke database
if (mysqli_query($koneksi, "INSERT INTO `tagihan_pembayaran` (`id_tagihan`, `id_pelanggan`, `nama_pelanggan`, `harga`, `riwayat_tagihan`, `tanggal_dibayar`) VALUES (NULL, '$id_pelanggan', '$nama', '$harga', '$status_pembayaran', '$tanggal_pembayaran')")) {
    // Jika berhasil, alihkan ke halaman yang diinginkan
    header("location: ../dashboard-admin/tagihan.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo '<script type="text/javascript">';
    echo 'alert("Gagal menambahkan data. Silakan coba lagi.");';
    echo 'window.location = "tambahtagihan.php";'; // Ganti dengan halaman sebelumnya
    echo '</script>';
}
?>
