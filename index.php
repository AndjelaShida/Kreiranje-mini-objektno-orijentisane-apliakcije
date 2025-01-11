<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mobilni uredjaji</title>
</head>
<body>
    
<header>
    <h1 class="h1">Mobilni uređaji</h1>
    
</header>

<h2 class="h2">Spisak svih mobilnih uredjaja</h2>


<div class="container">
<?php
include "DB.php";
include "class.php";

// $sql = "SELECT * FROM mobilni";
// $result = Connection::get($sql);

// Provera da li postoji rezultat
// if ($result && $result->num_rows > 0) {
//     echo "<table>";
//     echo "<tr><th>ID</th><th>Proizvođač</th><th>Model</th><th>Cena</th><th>Godina proizvodnje</th><th>Datum i vreme unosa</th></tr>";
    
//     // Prikazivanje svakog reda rezultata u tabeli
//     while($row = $result->fetch_assoc()) {
//         echo "<tr>";
//         echo "<td>" . $row["ID"] . "</td>";
//         echo "<td>" . $row["proizvodjac"] . "</td>";
//         echo "<td>" . $row["model"] . "</td>";
//         echo "<td>" . $row["cena"] . "</td>";
//         echo "<td>" . $row["godinaProizvodnje"] . "</td>";
//         echo "<td>" . $row["dateTime"] . "</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// } else {
//     echo "Nema rezultata za prikazivanje.";
// }


//PRIKAZ SVIH MOBILNIH

$dat=mobilni::getAll();

if ( $dat !=0){
echo "<table>";
foreach($dat as $row){

    echo "<tr>";
            echo "<td>" . "ID:" . $row["ID"] . "</td>";
            echo "<td>" . "Proizvodjac:" . $row["proizvodjac"] . "</td>";
            echo "<td>" . "Model:" . $row["model"] . "</td>";
            echo "<td>" . "Cena" . $row["cena"] . "</td>";
            echo "<td>" . "Godina proizvodnje:" . $row["godinaProizvodnje"] . "</td>";
            echo "<td>" . "DateTime". $row["dateTim"] . "</td>";
            echo " <td> <a href='obrisi.php?id=".$row["ID"]."'>Obrisi</a>  </td>";
            echo "</tr>";

}

    echo "</table>";
} else {
    echo "Nema rezultata za prikazivanje.";
}



?>
</div>

<div class="formContainer">
<form method ="POST" action="insert.php" name="input">
    Proizvodjac <input type = "text" name ="proizvodjac"><br/>
    Model <input type = "text" name ="model"><br/>
    Cena <input type = "text" name ="cena"><br/>
    Godina proizvodnje <input type = "text" name ="godinaProizvodnje"><br/>
    dateTime <input type = "date" name ="dateTime"><br/>
    <input type="submit" name="insert" value="Dodaj novi mobilni">
    <!-- <input type="button" value ="Obrisi mobilni"> -->
    <!-- <input type="submit" value ="Uredi postojeci mobilni"> -->


</form>
</div>




    
</body>
</html>





