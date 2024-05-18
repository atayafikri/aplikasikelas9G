<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$keterangan = $_POST['keterangan'];

// update data ke database
mysqli_query($mysqli, "update pengumuman set name='$name', keterangan='$keterangan' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:admin.php");
