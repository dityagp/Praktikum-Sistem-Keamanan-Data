<html>

<head>
    <title>Vigenere - Enkripsi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp2nZYVYfWwqjowvQICn0j24E00_xSE1weLQ&usqp=CAU)">
<div class="container">
    <h1 align="center">Vigenere - Enkripsi</h1>
    <hr>
    <form action="enkripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
        <label for="basic">Masukkan Plain Text :</label>
        <textarea class="form-control" name="plain" id="textarea-a"></textarea>
        <label for="basic">Masukkan Kunci :</label>
        <textarea class="form-control" name="kunci" id="textarea-a"></textarea><br>
        <input type="submit" class="btn btn-success" value=" Encrypt" data-theme="a">
        <input type="reset" class="btn btn-danger" value=" Hapus" data-theme="a">
    </form>
</div>
</body>

</html>