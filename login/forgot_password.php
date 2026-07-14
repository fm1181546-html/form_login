<?php
include 'config.php';

if (isset($_POST['email'])) {
    $email       = $_POST['email'];
    $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

    // Cek apakah email ada di database
    $cek_email = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    if (mysqli_num_rows($cek_email) > 0) {
        // Update password baru
        $update = mysqli_query($conn, "UPDATE user SET password = '$new_password' WHERE email = '$email'");
        
        if ($update) {
            echo "<script>alert('Password berhasil diperbarui!'); window.location='login.html';</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan!'); window.location='forgot.html';</script>";
    }
}
?>