<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NPM : <?= $mhs["npm"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>