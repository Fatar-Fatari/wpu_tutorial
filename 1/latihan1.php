<?php
// Koneksi ke DN dan pilih database
$db = mysqli_connect('localhost', 'root', '', 'wpu_tutorial');

// Query isi tabel mahasiswa
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

// Ubah data ke dalam array
//$row = mysqli_fetch_row($result); // array numerik
//$row = mysqli_fetch_assoc($result); // array associative
//$row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// Tampung ke variabel mahasiswa 
$mahasiswa = $rows;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $m['gambar'] ?>" width="40"></td>
        <td><?= $m['nama'] ?></td>
        <td><?= $m['nim'] ?></td>
        <td><?= $m['email'] ?></td>
        <td><?= $m['jurusan'] ?></td>
        <td>
          <a href="#">Ubah</a> | <a href="#">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>