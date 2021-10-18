<?php
require "config.php";

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function enkripsi($data) {
    $method="AES-128-CTR"; 	//Chiper Method
    $key ="Sicantik123@#@"; // kata kunci yg digunakan utk enkripsi data
    $option=0;
    $iv="1251632135716362"; // panjang iv disesuaikan dengan method chiper

	return openssl_encrypt($data, $method, $key, $option, $iv);
}

function dekripsi($data) {
    $method="AES-128-CTR"; 	//Chiper Method
    $key ="Sicantik123@#@"; // kata kunci yg digunakan utk enkripsi data
    $option=0;
    $iv="1251632135716362"; // panjang iv disesuaikan dengan method chiper

	return openssl_decrypt($data, $method, $key, $option, $iv);
}

function tambah($data) {
	global $conn;

	$nama = $data["nama"];
    $tanggal = $data["tanggal"];
	$alamat = $data["alamat"];
    $email = enkripsi($data["email"]);

	$query = "INSERT INTO `siswa_baru` 
				VALUES (NULL, '$nama', '$tanggal', '$alamat', '$email')
			";
	mysqli_query($conn, $query);
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nama = $data["nama"];
    $tanggal = $data["tanggal"];
	$alamat = $data["alamat"];
	$email = enkripsi($data["email"]);
    

	$query = "UPDATE `siswa_baru` SET
				nama = '$nama',
                `ttl` = '$tanggal',
				alamat = '$alamat',
                email = '$email' WHERE id = $id
			";

	mysqli_query($conn, $query);
	echo mysqli_error($conn);

	return mysqli_affected_rows($conn);	
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM `siswa_baru` WHERE id = $id");
	return mysqli_affected_rows($conn);
}


// 	// enkripsi password
// 	$password = password_hash($password, PASSWORD_DEFAULT);

// 	return mysqli_affected_rows($conn);

// }