<?php 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040036",
		"nama" => "Caprio p sinaga",
		"email" => "caprio.sinaga16@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "team.png"
	],
	[
		"nrp" => "203040012",
		"nama" => "Ibnu Rusdianto",
		"email" => "ibnu.rusdianto55@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "team.png"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>