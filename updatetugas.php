<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$haritanggal = $_POST['haritanggal'];
$tugas = $_POST['tugas'];
$mapel = $_POST['mapel'];
$deadline = $_POST['deadline'];

// update data ke database
mysqli_query($mysqli, "update tugas set haritanggal='$haritanggal', tugas='$tugas', mapel='$mapel', deadline='$deadline' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:admintugas.php");
