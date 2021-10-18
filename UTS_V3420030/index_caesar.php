<html>

<head>
    <title>Caesar Cipher</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp2nZYVYfWwqjowvQICn0j24E00_xSE1weLQ&usqp=CAU)">
    <div class="container">
        <h1 align="center">Dekripsi Caesar</h1>
        <hr>
        <form action="dekCaesar.php" method="get" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
            <label for="basic">Masukkan Key :</label>
            <textarea class="form-control" name="key" id="textarea-a" maxlength="2"></textarea><br>
            <input type="submit" class="btn btn-success" value=" Kirim" data-theme="a">
            <input type="reset" class="btn btn-danger" value=" Hapus" data-theme="a">
        </form>
    </div>

</body>

</html>