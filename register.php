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
            <form action="#" method="POST">
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
            <button onclick="window.location.href='login.html'">Sudah punya akun?</button>
            <button onclick="window.location.href='index.php'">Kembali ke Home</button>
        </div>
    </div>
</body>
</html>
