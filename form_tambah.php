<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>GENSHIN IMPACT</title>

   
<div class="container my-2">

<h1><center>TAMBAH DATA</center></h1></br>

<form method = "POST" action = "tambah.php">
  <div class="mb-3">
    <label class="form-label">ID</label>
    <input type="text" class="form-control" name = "id" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control" name = "nama" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Elemen</label>
    <input type="text" class="form-control" name = "elemen" required>
  </div>
  <div class="mb-3">
    <label class="form-label">TTL</label>
    <input type="date" class="form-control" name = "ttl" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Kota</label>
    <input type="text" class="form-control" name = "kota" required>
  </div>
  <button type="submit" class="btn btn-primary" value = "simpan">Submit</button>
  <a class="btn btn-success" href = "index.php">Lihat data</a>
</form>
</div>
    
</form>
</body>
</html>