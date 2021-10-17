<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>GENSHIN IMPACT</title>

    <h1><center>TAMBAH DATA</center></h1><</br>

<div class="container">
<form method = "POST" action = "tambah.php">
  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" name = "id">
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name = "nama">
  </div>
  <div class="mb-3">
    <label class="form-label">Elemen</label>
    <input type="text" class="form-control" name = "elemen">
  </div>
  <div class="mb-3">
    <label class="form-label">TTL</label>
    <input type="date" class="form-control" name = "ttl">
  </div>
  <div class="mb-3">
    <label class="form-label">Kota</label>
    <input type="text" class="form-control" name = "kota">
  </div>
  <button type="submit" class="btn btn-primary" value = "simpan">Submit</button>
</form>
</div>
    <center><a href = "index.php">Lihat data</a></center>
</form>
</body>
</html>