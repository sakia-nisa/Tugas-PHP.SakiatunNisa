<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    
    <?php
    echo 'code PHP disini';
    ?>
    <p>Dokumen Html</p>
    <?php
    echo 'code PHP disini';
    ?>
<p>___________Variabel____________</p>
<p>
<?php
// Deklarasi dan inisialisasi
$bil =5;
    echo $bil;
    ?></p>
<p>
<?php
$bil =5;
    var_dump ($bil);
    //output: int(5)

    $var = "";
    var_dump($var);
//output: string(0)

    $var = null;
    var_dump($var);
    //ouput: NULL
    ?></p>
    <?php
    $a = 5;
    $b = 5;

    if ($a > $b){
        echo 'a lebih besar daripada b';
    } else if ($a = $b){
        echo 'a sama dengan b';
    } else {
        echo 'a TIDAK lebih besar dari b';
    }
    ?></p>
<p>__________________________________________________</p>
    <h3>TUGAS</h3>
<p>
<p>___________Perulangan bilangan Genap 100 - 0____________</p>
    <?php
    $i = 100;
    while ($i >= 0){
        echo "$i";
        echo "<br/>";
        $i-=2;
    }
?>    </p>
<p>
<p>___________Menampilkan Bilangan Yang Mempunyai Angka 8____________</p>
<?php 
    for($i=8; $i <= 100; $i=$i+10){
        echo $i;
        echo "<br />";
    }
?></p>
</body>
</html>