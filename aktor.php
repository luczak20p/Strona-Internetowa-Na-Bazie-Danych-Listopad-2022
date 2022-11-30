<?php
session_start();
ob_start();

if(isset($_SESSION['login'])){
  if($_SESSION['login']==''){
    $_SESSION['login']='Zaloguj się';
  }
}
if(!isset($_SESSION['login'])){
    $_SESSION['login']='Zaloguj się';
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
      
      $select = $poloczenie1->getPolaczenie()->query("SELECT * FROM aktorzy where id_rezyser={$_GET['idek']}");
      while($row=$select->fetch()){
          echo "<div class=dedykowany> <img src=".$row["zdjecie"]." alt='zdjecie aktora'> <div><p>".$row['imie']." ".$row['nazwisko']."</p> <p>".$row['opis']."</p></div></div>"; 
  
      }
      ?>
      
    </main>
  </body>
</html>
