<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_umkm'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// menginput data ke database
mysqli_query($koneksi, "insert into umkm values('','$nama','$alamat','$deskripsi','$kategori','$latitude','$longitude')");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
