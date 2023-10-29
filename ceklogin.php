<?php
        require'koneksi.php';
        $nama = $_POST['username'];
        $password = $_POST['password']; 
    
        $sql = "SELECT * FROM admins WHERE nama= '$nama'";
        $result = mysqli_query($koneksi, $sql);
        $sql1 = "SELECT * FROM admins WHERE password= '$password'";
        $result1 = mysqli_query($koneksi, $sql1);
    
        if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result1) > 0){
            $_SESSION['username'] = $nama; // Simpan $nama dalam session
            header("Location: dashboard-admin/dashboard.php");
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Username atau Password tidak cocok, silahkan cek kembali!");'; // Contoh pesan popup
            echo 'window.location = "index.html";'; // Redirect ke halaman lain jika diperlukan
            echo '</script>';
        }
    ?>