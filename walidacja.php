<?php
    session_start();
    ob_start();
    
    require_once("PoloczenieZBaza.php");
    $poloczenie1 = PoloczenieZBaza::getInstance();
    $poloczenie1->getPolaczenie()->query("use osskars");
      
    //   $select = $poloczenie1->getPolaczenie()->query("SELECT * FROM aktorzy");
    //   while($row=$select->fetch()){
    //       echo "<div> <img src=".$row["zdjecie"]." alt=uwu> <div><p><a href='aktor.php'>".$row['imie']." ".$row['nazwisko']."</a></p><p>".$row['opis']."</p></div></div>"; //użyć tego do wypisywania aktorów itp. z bazy na stronę, img nazwy w bazie, a obrazy w folderze img
    //   }

    if(isset($_POST["login"])&&isset($_POST["password"]))

    if (!preg_match('/^([A-Za-z0-9-_]+)$/', $_POST["login"]) ) {
        echo "Błędny login";
        
    }

    if(!preg_match('/^([A-Za-z0-9-_]+)$/', $_POST["password"])){
        echo "Błędne hasło";
    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link id=stylowanie rel="stylesheet" href=styleUser.css />
  </head>
  <body>
    <form action=index.php method=post>
        <input type=submit value=wróć>
    </form>
  </body>
</html>
