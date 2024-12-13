<?php
session_start();

// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "riasec_test");

if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Proses form register
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Validasi password dan konfirmasi password
    if ($password !== $confirm_password) {
        echo "<script>alert('Kata sandi dan konfirmasi kata sandi tidak cocok!');</script>";
    } else {
        // Enkripsi password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Simpan data ke database
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan: " . $conn->error . "');</script>";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <p>Buat akun baru untuk mulai menggunakan RIASEC Test!</p>
        <div class="login-box">
            <h2>Daftar Akun</h2>
            <form action="register.php" method="POST">
                <label for="name">
                    <i class="fas fa-user"></i> Nama Lengkap
                </label>
                <input id="name" name="name" type="text" placeholder="Masukkan nama lengkap Anda" required>
                
                <label for="email">
                    <i class="fas fa-envelope"></i> Email (Surel)
                </label>
                <input id="email" name="email" type="email" placeholder="Masukkan email Anda" required>
                
                <label for="password">
                    <i class="fas fa-lock"></i> Kata Sandi
                </label>
                <input id="password" name="password" type="password" placeholder="Masukkan kata sandi Anda" required>
                
                <label for="confirm-password">
                    <i class="fas fa-lock"></i> Konfirmasi Kata Sandi
                </label>
                <input id="confirm-password" name="confirm-password" type="password" placeholder="Ulangi kata sandi Anda" required>
                
                <button type="submit">Daftar</button>
            </form>
        </div>
        <div class="options-box">
            <button onclick="window.location.href='login.php'">Sudah punya akun?</button>
            <button onclick="window.location.href='index.php'">Kembali ke Home</button>
        </div>
    </div>
</body>
</html>
