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
            <form action="#" method="POST">
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
            <button onclick="window.location.href='register.html'">Belum punya akun?</button>
            <button onclick="window.location.href='index.php'">Kembali ke Home</button>
        </div>
    </div>
</body>
</html>
