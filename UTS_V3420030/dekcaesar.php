<!DOCTYPE html>
<html>

<head>
    <title>Dekripsi Caesar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp2nZYVYfWwqjowvQICn0j24E00_xSE1weLQ&usqp=CAU)">
    <?php
    $key = $_GET["key"];
    $nmfile = "enkripsi.txt";
    $fp = fopen($nmfile, "r"); // buka file hasil enkripsi
    $isi = fread($fp, filesize($nmfile));
    for ($i = 0; $i < strlen($isi); $i++) {
        $kode[$i] = ord($isi[$i]); // rubah ASII ke desimal
        $b[$i] = ($kode[$i] - $key) % 256; // proses dekripsi Caesar
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
    }

    ?>
    <div class="container">
        <h1 align="center">Hasil - Dekripsi</h1>
        <hr>
        <form method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
            <label for="basic">Kalimat Cipher Text :</label>
            <textarea class="form-control" name="kata" id="textarea-a">
                <?php for ($i = 0; $i < strlen($isi); $i++) {
                    echo $isi[$i];
                }
                ?>
            </textarea>
            <label for="basic">Hasil Dekripsi :</label>
            <textarea class="form-control" name="key" id="textarea-a" maxlength="2">
                <?php for ($i = 0; $i < strlen($isi); $i++) {
                    echo $c[$i];
                }
                ?>
            </textarea><br>
            <a class="btn btn-primary py-1 px-4" href="dashboard.php" target="_blank">Dashboard</a>
        </form>
    </div>
</body>

</html>