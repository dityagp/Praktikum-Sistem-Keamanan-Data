<?php
// session_start();

// if( !isset($_SESSION["login"]) ) {
// 	header("Location: login.php");
// 	exit;
// }

require 'fungsi.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'siswa.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
			</script>
		";
	}


}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Input Data Siswa</title>
</head>
<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp2nZYVYfWwqjowvQICn0j24E00_xSE1weLQ&usqp=CAU)">
    <div class="container">
            <br>
            <h1 align="center" class="mb-3">Tambah Data Siswa</h1>
            <form action="" method="post" enctype="multipart/form-data" class="ui-body ui-body-a ui-corner-all">
                <div class="mb-3">
                    <label for="basic">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap Siswa">
                </div>
                <div class="mb-3">
                    <label for="basic">Tanggal Lahir</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal Lahir Siswa">
                </div>
                <div class="mb-3">
                    <label for="basic">Alamat Tempat Tinggal</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Tempat Tinggal Siswa">
                </div>
                <div class="mb-3">
                    <label for="basic">Email Aktif</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email Aktif Siswa">
                </div>
                
                <button class="btn btn-success" type="submit" name="submit">Tambah Data</button>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>