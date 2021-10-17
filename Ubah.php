<?php
include ("koneksi.php");

$id = $_POST['txtid'];
$nama = $_POST['txtnama'];
$elemen = $_POST['txtelemen'];
$ttl = $_POST['txtttl'];
$kota = $_POST['txtkota'];

    $query="update data_character set nama='$nama', elemen='$elemen', ttl='$ttl', kota='$kota' where id='$id'";
    $hasil= mysqli_query($conn,$query);

header("location:index.php");
?>