<?php
session_start();
include 'config.php';
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query  = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    $user   = mysqli_fetch_assoc($result);
    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
        } else {
            echo "<script>alert('Password salah!'); window.location='login_login.html';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location='index_login.html';</script>";
    }
}
?>
