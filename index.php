<?php

include_once "./config.php";

if (isset($_POST["inputan"])) {
    $string = $_POST["inputan"];
    // echo $string;
    checker($string);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARBI Nih Boss</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="Masukkan inputan" name="inputan">
        <button type="submit">Submit</button>
        <button type="reset">Hapus</button>
    </form>
</body>

</html>