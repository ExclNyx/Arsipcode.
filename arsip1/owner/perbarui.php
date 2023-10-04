<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE mahasiswa set nim='$nim', nama='$nama', telp='$telp', email='$email', jurusan='$jurusan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>