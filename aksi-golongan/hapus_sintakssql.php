<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// kondisi jika gagal
if (mysqli_query($koneksi,"DELETE FROM golongan_harga where id_golongan='$id'")) {
    // Jika berhasil, alihkan ke halaman yang diinginkan
    header("location: ../dashboard-admin/golongan.php");
} else {
    // Jika gagal, tampilkan pesan kesalahan
    echo '<script type="text/javascript">';
    echo 'alert("Gagal menambahkan data. Silakan coba lagi.");';
    echo 'window.location = "../dashboard-admin/golongan.php";'; // Ganti dengan halaman sebelumnya
    echo '</script>';
    // Mencatat kesalahan ke dalam file log
    // error_log('SQL Error: ' . mysqli_error($koneksi), 3, 'error.log');
} 
?>