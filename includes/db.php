<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "riasec_test"
);

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
