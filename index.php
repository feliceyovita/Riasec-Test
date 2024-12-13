<?php 
include 'includes/header.php'; 
session_start(); // Memulai sesi untuk memeriksa status login

// Cek apakah pengguna sudah login
$is_logged_in = isset($_SESSION['user_id']);
?>
<section class="section">
  <div class="account__container">
    <?php if ($is_logged_in): ?>
      <!-- Tombol keluar jika sudah login -->
      <a href="logout.php" class="akun">Keluar</a>
    <?php else: ?>
      <!-- Tombol masuk dan daftar jika belum login -->
      <a href="login.php" class="akun">Masuk</a>
      <a href="register.php" class="akun">Daftar</a>
    <?php endif; ?>
  </div>
  <div class="section__container">
    <div class="content">
      <p class="subtitle">HALO</p>
      <h1 class="title">
        Selamat Datang di Website <span>Tes Riasec</span>
      </h1>
      <p class="description">
        Holland Occupational Themes adalah teori kepribadian yang berfokus pada pilihan karier dan pekerjaan, mengelompokkan
        orang berdasarkan kecocokan dengan enam kategori pekerjaan yang membentuk akronim RIASEC. Dikembangkan oleh John L.
        Holland sejak 1950-an, teori ini mendominasi bidang konseling karier dan digunakan dalam banyak penilaian populer. Skala
        Penanda RIASEC oleh Liao, Armstrong, dan Rounds (2008) dibuat sebagai alternatif publik untuk penilaian komersial. <br><br>
        Tes ini terdiri dari 30 tugas yang harus Anda nilai berdasarkan seberapa Anda menikmati melakukannya, dengan skala: (1)
        tidak suka, (2) agak tidak suka, (3) netral, (4) agak suka, (5) suka. Tes ini membutuhkan waktu sekitar 5-10 menit.
      </p>
      <div class="action__btns">
        <?php if ($is_logged_in): ?>
          <!-- Jika login, arahkan ke halaman tes -->
          <a href="test_form.php" class="mulai__test">Mulai tes</a>
        <?php else: ?>
          <!-- Jika belum login, arahkan ke halaman login -->
          <a href="login.php" class="mulai__test">Mulai tes</a>
        <?php endif; ?>
      </div>
    </div>
    <div class="image">
      <img src="assets/profile.png" alt="profile" />
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>
