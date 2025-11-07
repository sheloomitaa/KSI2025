<?php
$koneksi = mysqli_connect("localhost", "root", "", "ksi2025_db");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil!";
