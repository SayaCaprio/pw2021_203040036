<?php 
// $mahasiswa = [
// ["Caprio parlindungan sinaga", "203040036", "caprio.sinaga16@gmail.com", "Teknik Informatika"],
// ["Ibnu Rusdianto", "203040012", "ibnu.rusdianto55@gmail.com", "Teknik Informatika"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
	[	
		"nrp" => "203040012",
		"nama" => "Ibnu Rusdianto",
		"email" => "ibnu.rusdianto55@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "team.png"
	],
	[
		"nama" => "Caprio sinaga", 
		"nrp" => "203040036",
		"email" => "Caprio.sinaga16@gmail.com",
		"jurusan" => "Teknik Industri",
		"gambar" => "team.png"
	]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>