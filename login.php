<?php
// Mulai sesi untuk menyimpan data pengguna setelah login
session_start();

// Konfigurasi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "riasec_test";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses form login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password']; // Pastikan ini nanti diverifikasi dengan hash

    // Ambil data pengguna berdasarkan email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Arahkan ke halaman index jika login berhasil
            header("Location: index.php");
            exit();
        } else {
            $error = "Kata sandi salah.";
        }
    } else {
        $error = "Email tidak ditemukan.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <p>Selamat datang di RIASEC Test!</p>
        <p>Untuk mulai menggunakan RIASEC Test, silakan login terlebih dahulu.</p>
        <div class="login-box">
            <h2>Masuk Akun</h2>
            <?php if (isset($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <form action="" method="POST">
                <label for="email">
                    <i class="fas fa-envelope"></i> Email (Surel)
                </label>
                <input id="email" name="email" type="text" placeholder="Masukkan email Anda" required>
                <label for="password">
                    <i class="fas fa-lock"></i> Kata Sandi
                </label>
                <input id="password" name="password" type="password" placeholder="Masukkan kata sandi Anda" required>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="options-box">
            <button onclick="window.location.href='register.php'">Belum punya akun?</button>
            <button onclick="window.location.href='index.php'">Kembali ke Home</button>
        </div>
    </div>
</body>
</html>
