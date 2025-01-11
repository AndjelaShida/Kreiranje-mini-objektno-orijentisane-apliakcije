<?php
include "DB.php";
include "class.php";


$ID= $_GET["id"];

$rez = mobilni::brisi($ID);


if($rez["Success"] == "true")
{
    header("Location: index.php");
}
else
{
    echo "<p style='color: red;'>".$rez['msg']."</p>";
}