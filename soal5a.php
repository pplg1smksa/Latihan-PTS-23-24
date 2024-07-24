<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <?php 
    if(isset($_POST['nama'])) : ?>

    <form action="soal5.php" method="get">
        <h2>Output : </h2>
        
        <p>Halo Nama Saya <b><?= $_POST['nama'] ?></b><br></p>
        <p>Saya Dari Jurusan <b><?= $_POST['jurusan'] ?></b></p>
        <button type="submit">Keluar</button>
    </form>
    
    <?php endif; ?>
</body>
</html>