<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_umkm'];
$nama = $_POST['nama_umkm'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query($koneksi, "update umkm set nama_umkm='$nama', alamat='$alamat', deskripsi='$deskripsi', kategori='$kategori', latitude='$latitude', longitude='$longitude' where id_umkm='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
