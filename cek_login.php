<?php

// Aktifkan session
session_start();

// Panggil koneksi db
include "koneksi.php";

@$pass = md5($_POST['password']);
@$username = mysqli_escape_string($koneksi, $_POST['username']);
@$password = mysqli_escape_string($koneksi, $pass);

$login = mysqli_query($koneksi, "SELECT * FROM tuser where username = '$username' and password = '$password' and status = 'Aktif' ");

$data = mysqli_fetch_array($login);

// Uji jika username dan password sesuai
if($data) {
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nama_pengguna'] = $data['nama_pengguna'];

    // Arahkan ke halaman admin
    header('location:dashboard.php');
}else {
    echo "<script>
            alert('Maaf, Gagal masuk. Pastikan username dan password anda benar...!');
            document.location='index.php';
            </script>";
}
