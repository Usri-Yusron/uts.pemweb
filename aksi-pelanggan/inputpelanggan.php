<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$golongan = $_POST['jenis_golongan'];
$kedatangan = $_POST['kedatangan'];
$alamat = $_POST['alamat'];

// menginput data ke database
if (mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('', '$nama', '$golongan', '$kedatangan', '$alamat')")) {
    // Jika berhasil, alihkan ke halaman yang diinginkan
    header("location: ../dashboard-admin/pelanggan.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo '<script type="text/javascript">';
    echo 'alert("Gagal menambahkan data. Silakan coba lagi.");';
    echo 'window.location = "tambahpelanggan.php";'; // Ganti dengan halaman sebelumnya
    echo '</script>';
}
?>
