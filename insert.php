<?php
include "DB.php";
include "class.php";


$proizvodjac = $_POST["proizvodjac"];
$model = $_POST['model'];
$cena = $_POST["cena"];
$datum = $_POST['dateTime'];
$godina = $_POST['godinaProizvodnje'];

$niz = array();

$niz['p'] = $proizvodjac;
$niz['d'] = $datum;
$niz['g'] = $godina;
$niz['m'] = $model;
$niz['c'] = $cena;

$rez = mobilni::create($niz);

if($rez["Success"] == "true")
{
    header("Location: index.php");
}
else
{
    echo "<p style='color: red;'>".$rez['msg']."</p>";
}





