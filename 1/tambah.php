<?php 

require 'functions.php';

// cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert ('Data berhasil ditambahkan');
            document.location.href = 'latihan3.php';
          </script>";
  } else {
    echo "Tambah data gagal : " . mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
  <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
</head>
<body>
  <div class="container">
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
      <!-- nama -->
      <label for="input-nama">Nama</label>
      <input class="u-full-width" type="text" name="nama" placeholder="Masukkan Nama Anda" id="input-nama" required autofocus>
      <!-- nim -->
      <label for="input-nim">NIM</label>
      <input class="u-full-width" type="text" name="nim"  placeholder="Masukkan NIM Anda" id="input-nim" required>
      <!-- text -->
      <label for="input-email">Email</label>
      <input class="u-full-width" type="text" name="email"  placeholder="Masukkan Email Anda" id="input-email" required>
      <!-- jurusan -->
      <label for="input-jurusan">Jurusan</label>
      <input class="u-full-width" type="text" name="jurusan"  placeholder="Masukkan Jurusan Anda" id="input-jurusan" required>
      <!-- gambar -->
      <label for="input-gambar">Gambar</label>
      <input class="u-full-width" type="text" name="gambar"  placeholder="Masukkan Gambar Anda" id="input-gambar" required>
      <!-- submit -->
      <input class="button-primary" type="submit" name="tambah" value="Submit">
    </form>
  </div>
</body>
</html>