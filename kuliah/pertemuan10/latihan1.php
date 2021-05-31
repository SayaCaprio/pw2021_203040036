<?php
// koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "pw_203040036");

//ngambil db dri tabel mahasiswa / query data mhs
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data(fetch) dari object result
// mysqli_fetch_row() / mengembalikan arrayy numerik
// mysqli_fetch_assoc() / mengembalikan array associative
// mysqli_fetch_array() / mengembalikan keduanya
// mysqli_fetch_object() / 

// while ($mhs = mysqli_fetch_assoc($result)) {
//   var_dump($mhs);
// }


$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
  # code...
}

$mahasiswa = $rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar mahasiswa</title>
</head>

<body>
  <h3>Daftar mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>gambar</th>
      <th>nrp</th>
      <th>nama</th>
      <th>email</th>
      <th>jurusan</th>
    </tr>


    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td> <?= $i++; ?></td>
        <td><img src="img/<?= $m["gambar"]; ?>" width=" 50">
        <td><?= $m["nrp"] ?></td>
        <td><?= $m["nama"] ?></td>
        <td><?= $m["email"] ?></td>
        <td><?= $m["jurusan"] ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
        </td>

      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>