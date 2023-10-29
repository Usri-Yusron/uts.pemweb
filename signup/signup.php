<?php
    require'../koneksi.php';
    $nama = $_POST['username'];
    $notlp = $_POST['notlp'];
    $password = $_POST['password'];
    $email = $_POST['email'];


    $query_sql = "INSERT INTO admins (id_admin, nama, email, password, no_tlp) VALUES ('', '$nama', '$email', '$password', '$notlp')";

    if (mysqli_query($koneksi, $query_sql)) {
        echo '<script type="text/javascript">';
        echo 'alert("Data berhasil ditambah, silahkan login kembali!");'; // Contoh pesan popup
        echo 'window.location = "../index.html";'; // Redirect ke halaman lain jika diperlukan
        echo '</script>';
    } else {
        echo 'Error: ' . mysqli_error($koneksi);
    }
?>