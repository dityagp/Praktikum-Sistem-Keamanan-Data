<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5</title>
</head>

<body>
    <h2>Halaman Index</h2>

    <br />

    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php");
    }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

    <br />
    <br />
</body>

</html>