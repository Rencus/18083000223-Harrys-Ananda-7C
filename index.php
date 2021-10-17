<html>
<title>GENSHIN IMPACT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body class="text-light" background="../bg1.jpg">
    <center>
        <h1>CHARA GENSHIN</h1></br>

            <table border = "1" cellpadding = "5" cellspacing = "0">
        <nav>
        <a href = "tambah.php">Tambah Data</a>
</nav>
<br>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Elemen</th>
        <th>TTL</th>
        <th>Kota</th>
        <th>Opsi</th>
    </tr>

<?php include("koneksi.php");
if($conn){
$hasil = mysqli_query($conn,"SELECT * FROM data_character");
while ($row = mysqli_fetch_array($hasil))
{
echo "<tr><td align=center>$row[id]</td>
      <td align=center>$row[nama]</td>
      <td align=center>$row[elemen]</td>
      <td align=center>$row[ttl]</td>
      <td align=center>$row[kota]</td>
      <td align=center><a href=form_ubah.php?id=$row[id]>Ubah</a>
      <a href=hapus.php?id=$row[id]>Hapus</a>
      </tr>";

    $row=mysqli_query($conn,"select * from data_character where id='$row[id]'");
}
}
?>
</body>
</table>
</html>