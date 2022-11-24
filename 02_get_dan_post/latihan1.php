<?php 
// $_GET
$mahasiswa = [
	[	
		"nama" => "budi",
		"npm" => "12345",
		"email" => "budi@gmail.com",
		"jurusan" => "informatika"
	],
	[
		"nama" => "dewi", 
		"npm" => "67890",
		"email" => "dewi@gmail.com",
		"jurusan" => "ekonomi"
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
			<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>">
			<?= $mhs["nama"]; ?>
		</a>
		</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>