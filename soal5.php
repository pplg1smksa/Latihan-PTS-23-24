<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    <?php 
    $errorNama = '';
    $errorJurusan = '';

    if(isset ($_POST['nama'])) {
      if($_POST['nama'] == '') {
        $errorNama = 'Nama User tidak boleh kosong';
      }
      if($_POST['jurusan'] == '') {
        $errorJurusan = 'Jurusan harus diisi';
      }
    }

    ?>
      <form action="soal5a.php" method="POST">
        <h2>Form</h2>
        Nama : <input type="text" name="nama" value="<?= @$_POST['nama']?>">
        <p><?php echo $errorNama ?></p>
        <br><br>

        Jurusan : <input type="text" name="jurusan" value="<?= @$_POST['jurusan']?>">
        <?php echo $errorJurusan ?>
        <br><br>

        <button type="submit">Masuk</button>
      </form>
  </body>
</html>