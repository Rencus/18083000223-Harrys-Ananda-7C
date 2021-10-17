<?php
include "koneksi.php";
mysqli_query($conn,"delete from data_character where id='$_GET[id]'");
header('location:index.php');
?>