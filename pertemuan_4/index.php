<?php
    // var_dump($_POST);
    // if (isset($_POST['submit_btn'])) {
    //     if (strlen($_POST['nama']) > 0) {
    //         echo "login !";
    //     } else {
    //         echo "Isi diameter terlebih dahulu";
    //     }
    // }
    // $_GET['nama'] = "Rasyiddin";
    // var_dump($_GET); //bisa dinnput lewat url
    // caranya pake '?nama=Rasyiddin'
    require 'tabung.php' ;
    $tabung = new tabung ;
    if (isset($_POST['submit_btn'])) {
        $tabung->setDiameter ($_POST['diameter']);
        $tabung->setTinggi ($_POST['tinggi']) ;

        // echo "Diameter $diameter <br/>";
        // echo "Tinggi $tinggi <br/>";

        // $r= $diameter / 2 ;
    
        // $LuasSelimut = 3.14 * $diameter * $tinggi ;
        // $volume = 3.14 * $r * $r * $tinggi;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <!-- <input type="text" name="nama">
        <button name='submit_btn'>Submit</button> -->
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name = 'submit_btn'>Hitung</button>
    </form>
    <hr>

    <ul>
        <li>Luas Selimut : <?= $tabung->getLuas(); ?></li>
        <li>Volume : <?= $tabung->getVolume(); ?></li>
    </ul>

</body>
</html>