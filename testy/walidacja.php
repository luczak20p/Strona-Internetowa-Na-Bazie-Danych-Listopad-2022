<?php

//wszystko tu jest na sucho, przetestuje jutro, gdy się wyśpię
//przejść z funkcyjnych na obiektówkę

ob_start();
session_start();
include_once 'PoloczenieZBaza.php';

$poloczenie1 = PoloczenieZBaza::getInstance();
$select = $poloczenie1->getPolaczenie()->query("SELECT * FROM lowisko");

$uzytkownicy=[];
$hasla=[]; //druga tablica na hasła?
$i=0; //da sięto for'em?

while($row=$select->fetch()){
    //na razie województwo bo to testy
    $uzytkownicy[$i] = $row['wojewodztwo']; //użyć tego do wypisywania aktorów itp. z bazy na stronę, img nazwy w bazie, a obrazy w folderze img
    $i++;
}


function testowanie($uzytkownicy){

    for($i=0;$i<count($uzytkownicy);$i++){

        if($_POST["login"]==$uzytkownicy[$i]&&$_POST["password"]==$hasla[$i]){
            return true;
        }
    
    }

    return false;
}


if (isset($_POST["login"]) && isset($_POST["password"])) {
    if (!preg_match('/^([A-Za-z0-9-_]+)$/', $_POST["login"]) || !preg_match('/^([A-Za-z0-9-_]+)$/', $_POST["password"])) {
        $_SESSION["ErrorMassage"] = "Błędne hasło lub nazwa użytkownika";
        header("Location: index.html");
    } else {
       
            if(in_array($_POST["login"], $uzytkownicy)){
                if(testowanie($uzytkownicy)){
                    $_SESSION["user"] = $_POST["login"];
                    header("Location: aktorzy.html");
                }
                else{
                    $_SESSION["ErrorMassage"] = "Złe hasło lub login ";
                    header("Location: index.html");
                }

            }
            else{
                $_SESSION["ErrorMassage"] = "Użytkownik nie istnieje. Zarejestruj się.";
                header("Location: index.html");

            }
           
    }

}