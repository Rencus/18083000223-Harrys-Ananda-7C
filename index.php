<html>
<title>GENSHIN IMPACT</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<body>
    <center>
       

            <table border = "1" cellpadding = "5" cellspacing = "0">
       
<br>
</body>
    </table>
    <div class="container my-2">
    <h1 >CHARA GENSHIN</h1></br>
    <nav class="my-5">
        <a href = "tambah.php" class="btn btn-success"><span><i class="bi bi-file-plus"></i></i> Tambah Data</a>
    </nav>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Elemen</th>
      <th scope="col">TTL</th>
      <th scope="col">Kota</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  <?php include("koneksi.php");
if($conn){
$hasil = mysqli_query($conn,"SELECT * FROM data_character");
while ($row = mysqli_fetch_array($hasil))
{
echo "<tr><td>$row[id]</td>
      <td>$row[nama]</td>
      <td>$row[elemen]</td>
      <td>$row[ttl]</td>
      <td>$row[kota]</td>
      <td><a class='btn btn-primary' href=form_ubah.php?id=$row[id]>Ubah</a>
      <a class='btn btn-danger' href=hapus.php?id=$row[id]>Hapus</a>
      </tr>";

    $row=mysqli_query($conn,"select * from data_character where id='$row[id]'");
}
}
?>
  </tbody>
</table>
    </div>
</html>