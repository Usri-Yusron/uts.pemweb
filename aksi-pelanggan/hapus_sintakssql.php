<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

if (mysqli_query($koneksi,"DELETE FROM pelanggan where id_pelanggan='$id'")) {
    // Jika berhasil, alihkan ke halaman yang diinginkan
    header("location: ../dashboard-admin/pelanggan.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo '<script type="text/javascript">';
    echo 'alert("Gagal menghapus data. Silakan coba lagi.");';
    echo 'window.location = "../dashboard-admin/pelanggan.php";'; // Ganti dengan halaman sebelumnya
    echo '</script>';
}
?>