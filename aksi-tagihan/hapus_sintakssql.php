<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE FROM tagihan_pembayaran where id_tagihan='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location: ../dashboard-admin/tagihan.php");
 
?>