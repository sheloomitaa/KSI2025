<?php
include 'koneksi.php';

// contoh insert data
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $sql = "INSERT INTO tabel_saya (nama) VALUES ('$nama')";
    mysqli_query($koneksi, $sql);
    echo "Data berhasil ditambahkan!";
}
?>
