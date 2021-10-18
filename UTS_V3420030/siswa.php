<?php 

// session_start();

// if( !isset($_SESSION["login"]) ) {
// 	header("Location: login.php");
// 	exit;
// }

require 'fungsi.php';
$siswa = query("SELECT * FROM `siswa_baru`");

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
    <div class="container mt-3">

        <h1 align="center" class="mb-3">Data Siswa Baru</h1> <br>
        <div class="d-flex justify-content-between">
            <a href="tambah_siswa.php" class="btn btn-info">Tambah Data</a>
            <a href="dashboard.php" class="btn btn-primary">Dashboard</a>
        </div>

        <br>
        <hr>

        <table class="table table-hover">
            <tr>
                <th class="text-center">No.</th>
                <th>Nama Lengkap</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Email</th>
                <th class="text-center">Aksi</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach( $siswa as $row ) : ?>
            <tr>
                <td class="align-middle text-center"><?= $i; ?></td>
                <td class="align-middle"><?= $row["nama"]; ?></td>
                <td class="align-middle"><?= $row["ttl"]; ?></td>
                <td class="align-middle"><?= $row["alamat"]; ?></td>
                <td class="align-middle"><?= dekripsi($row["email"]); ?></td>
                <td class="align-middle text-center">
                    <a class="btn btn-warning" href="ubah_siswa.php?id=<?= $row["id"]; ?>">Ubah</a>
                    <a class="btn btn-danger" href="hapus_siswa.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus Data Ini?!');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>