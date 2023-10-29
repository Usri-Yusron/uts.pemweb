<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$idtagihan = $_POST['id_tagihan'];
$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$riwayat_tagihan = $_POST['riwayat_tagihan'];
$tanggal_dibayar = $_POST['tanggal_dibayar'];

// Teruskan pemrosesan dan pernyataan UPDATE menggunakan $ID
// update data ke database
if (mysqli_query($koneksi,"UPDATE tagihan_pembayaran SET 
                        id_pelanggan='$id_pelanggan', 
                        nama_pelanggan='$nama', 
                        harga='$harga', 
                        riwayat_tagihan='$riwayat_tagihan', 
                        tanggal_dibayar='$tanggal_dibayar' 
                    where id_tagihan='$idtagihan'")) {
    // Jika berhasil, alihkan ke halaman yang diinginkan
    header("location: ../dashboard-admin/tagihan.php");
} else {
    // // Jika gagal, tampilkan pesan kesalahan
    echo '<script type="text/javascript">';
    echo 'alert("Gagal mengedit data, HARGA atau NAMA tidak dapat diubah. Silakan coba lagi.");';
    echo 'window.location = "../dashboard-admin/tagihan.php";'; // Ganti dengan halaman sebelumnya
    echo '</script>';
    // Mencatat kesalahan ke dalam file log
    // error_log('SQL Error: ' . mysqli_error($koneksi), 3, 'error.log');
} 
?>