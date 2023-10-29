<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$idpelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$golongan = $_POST['jenis_golongan'];
$kedatangan = $_POST['waktu_kedatangan'];
$alamat = $_POST['alamat'];

// Teruskan pemrosesan dan pernyataan UPDATE menggunakan $ID
// update data ke database
if (mysqli_query($koneksi,"UPDATE pelanggan SET 
                        nama='$nama', 
                        jenis_golongan='$golongan', 
                        waktu_kedatangan='$kedatangan', 
                        alamat='$alamat' 
                    where id_pelanggan='$idpelanggan'")) {
    // Jika berhasil, alihkan ke halaman yang diinginkan
    header("location: ../dashboard-admin/pelanggan.php");
} else {
    // // Jika gagal, tampilkan pesan kesalahan
    echo '<script type="text/javascript">';
    echo 'alert("Gagal mengedit data. NAMA PELANGGAN tidak dapat diubah. Silakan coba lagi.");';
    echo 'window.location = "../dashboard-admin/pelanggan.php";'; // Ganti dengan halaman sebelumnya
    echo '</script>';
}
?>