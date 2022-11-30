<?php
session_start();
ob_start();

if(isset($_SESSION['login'])){
  if($_SESSION['login']==''){
    $_SESSION['login']='Zaloguj się';
  }
}
if(!isset($_SESSION['motyw'])){
  $_SESSION['motyw']='styleUser.css';
}

if(!isset($_SESSION['login'])){
    $_SESSION['login']='Zaloguj się';
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link id=stylowanie rel="stylesheet" href=<?php echo $_SESSION['motyw'] ?> />
  </head>
  <body>
    <nav>
      <div>
        <a href="index.php">Osskars</a>
        <img src="logo.png" alt="logo" />
      </div>
      <ul>
        <li><a href="filmy.php">Filmy</a></li>
        <li><a href="aktorzy.php">Aktorzy</a></li>
        <li><a href="rezyserzy.php">Reżyserzy</a></li>
      </ul>
      <div>
        <a href="uzytkownik.php"><?php echo $_SESSION['login'] ?></a>
        <img src="user.png" alt="użytkownik" />
      </div>
    </nav>
    <main>
        <?php

      require_once("PoloczenieZBaza.php");
      $poloczenie1 = PoloczenieZBaza::getInstance();
      $poloczenie1->getPolaczenie()->query("use surpr1sen_osskars");
      
      $select = $poloczenie1->getPolaczenie()->query("SELECT * FROM filmy where id_filmu={$_GET['idek']}");
      while($row=$select->fetch()){
          echo "<div class=dedykowany> <img src=".$row["plakat"]." alt='plakat filmu'> <div><p>".$row['tytul']."</p> <p>".$row['opis']."</p>"; 
  
      }
      $select = $poloczenie1->getPolaczenie()->query("SELECT * FROM rezyserzy inner join filmy on rezyserzy.id_rezyser=filmy.rezyser where filmy.id_filmu={$_GET['idek']}");
      while($row=$select->fetch()){
          echo "<div><p>Reżyser:</p> <a href=rezyser.php?idek={$row["id_rezyser"]}><img src=".$row["zdjecie"]." alt='zdjecie rezysera'></a> <p>".$row['imie']." ".$row['nazwisko']."</p></div></div></div>"; //użyć tego do wypisywania aktorów itp. z bazy na stronę, img nazwy w bazie, a obrazy w folderze img
  
      }
      ?>
      
    </main>
  </body>
</html>
