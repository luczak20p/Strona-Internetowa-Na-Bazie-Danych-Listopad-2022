<?php
require_once("PoloczenieZBaza.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:#000;
            color:#fff;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
$poloczenie1 = PoloczenieZBaza::getInstance();
$poloczenie1->getPolaczenie()->query("DROP database if exists osskars");
$poloczenie1->getPolaczenie()->query("create database osskars");
$poloczenie1->getPolaczenie()->query("use osskars");
$poloczenie1->getPolaczenie()->query("
    create table rezyserzy(
    id_rezyser int auto_increment primary key,
    imie varchar(45),
    nazwisko varchar(45),
    opis text,
    zdjecie text);");
$poloczenie1->getPolaczenie()->query("INSERT INTO `rezyserzy` (`id_rezyser`, `imie`, `nazwisko`, `opis`, `zdjecie`) VALUES
(1, 'Cezary', 'Pazura', 'Taki aktor no', 'user.png');");

$select = $poloczenie1->getPolaczenie()->query("SELECT * FROM rezyserzy");
while($row=$select->fetch()){
    echo $row['imie']." ".$row['nazwisko']; //użyć tego do wypisywania aktorów itp. z bazy na stronę, img nazwy w bazie, a obrazy w folderze img

}


