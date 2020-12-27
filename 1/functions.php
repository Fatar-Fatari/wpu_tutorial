<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'wpu_tutorial');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data) 
{
  $conn = koneksi();

  // data
  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO mahasiswa 
            VALUES 
            (null, '$nama', '$nim', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn); 
}