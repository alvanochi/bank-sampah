<?php

$koneksi = mysqli_connect("localhost:3306", "root", "", "db_bskciampea");

echo "tes";
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>