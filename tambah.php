<?php
include ("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$elemen = $_POST['elemen'];
$ttl = $_POST['ttl'];
$kota = $_POST['kota'];

mysqli_query($conn,"insert into data_character values('$id','$nama','$elemen','$ttl','$kota')");

header("Location:form_tambah.php");
?>