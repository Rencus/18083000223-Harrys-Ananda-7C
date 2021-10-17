<html>
<title>GENSHIN IMPACT</title>
<center>

<?php
include ("koneksi.php");

$data = $_GET['id'];
$edit = "SELECT * FROM data_character WHERE id='$data'";
$proses = mysqli_query($conn, $edit);
$row = mysqli_fetch_array($proses);
?>

<h1 align = "center">UBAH DATA</h1></br>

    <form method="POST" action="Ubah.php">
    <table align="center">
    
    <tr>
        <td>ID</td>
        <td><input type="text" name="txtid" value="<?php echo $row[0] ?>"></td>
    </tr>

    <tr>
        <td>Nama Character</td>
        <td><input type="text" name="txtnama" value ="<?php echo $row[1] ?>"></td>
    </tr>

    <tr>
        <td>Elemen</td>
        <td><input type="text" name="txtelemen" value ="<?php echo $row[2] ?>"></td>
    </tr>

    <tr>
        <td>TTL</td>
        <td><input type="date" name="txtttl" value ="<?php echo $row[3] ?>"></td>
    </tr>

    <tr>
        <td>Kota</td>
        <td><input type="text" name="txtkota" value ="<?php echo $row[4] ?>"></td>
    </tr>

    <tr>
        <td colspan=3 align="right">
        <input type="submit" name ="update" value="ubah">
    </tr>
</table>
</form>
</html>