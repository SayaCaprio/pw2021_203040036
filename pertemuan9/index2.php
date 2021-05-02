<?php
// koneksi ke db
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

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

?>
<!DOCTYPE html>
<html>

<head>
  <title> Halaman Admin</title>
</head>

<body>


  <h1>Daftar mahasiswa</h1>

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
    <?php $i = 1;  ?>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td><?= $i ?></td>
        <td>
          <a href="">Ubah</a>
          <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width=" 50">
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
        </td>

      </tr>
      <?php $i++ ?>
    <?php endwhile; ?>

  </table>
</body>

</html>