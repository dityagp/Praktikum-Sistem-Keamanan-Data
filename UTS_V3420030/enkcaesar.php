<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enkripsi Caesar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp2nZYVYfWwqjowvQICn0j24E00_xSE1weLQ&usqp=CAU)">
    <?php
    $kalimat = $_GET["kata"];
    $key = $_GET["key"];
    for ($i = 0; $i < strlen($kalimat); $i++) {
        $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
        $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
        $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
    }
    $hsl = '';
    for ($i = 0; $i < strlen($kalimat); $i++) {
        $c[$i];
        $hsl = $hsl . $c[$i];
    }

    //simpan data di file
    $fp = fopen("enkripsi.txt", "w");
    //$hsl = '';
    fputs($fp, $hsl);
    fclose($fp);
    ?>
    <div class="container">
        <h1 align="center">Hasil - Enkripsi</h1>
        <hr>
        <form action="index_caesar.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
            <label for="basic">Kalimat Asli :</label>
            <textarea class="form-control" name="kata" id="textarea-a">
                <?php
                for ($i = 0; $i < strlen($kalimat); $i++) {
                    echo $kalimat[$i];
                } ?>
            </textarea>
            <label for="basic">Hasil Enkripsi :</label>
            <textarea class="form-control" name="key" id="textarea-a" maxlength="2">
                <?php $hsl = '';
                for ($i = 0; $i < strlen($kalimat); $i++) {
                    echo $c[$i];
                    $hsl = $hsl . $c[$i];
                }
                ?>
            </textarea><br>
            <a class="btn btn-primary py-1 px-4" href="index_caesar.php" target="_blank">Caesar Dekriptor</a>
        </form>
    </div>

</body>

</html>