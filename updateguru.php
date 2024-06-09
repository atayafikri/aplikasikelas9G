<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$matapelajaran = $_POST['matapelajaran'];

// update data ke database
mysqli_query($mysqli, "update guru set nama='$nama', matapelajaran='$matapelajaran' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:adminguru.php");
