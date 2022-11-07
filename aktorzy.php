<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
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
        <p>użytkownik</p>

        <img src="user.png" alt="użytkownik" />
      </div>
      <div id="burger"></div>
    </nav>
    <main>
    <div>
      <?php

      require_once("PoloczenieZBaza.php");
      $poloczenie1 = PoloczenieZBaza::getInstance();
      $poloczenie1->getPolaczenie()->query("use osskars");
      
      $select = $poloczenie1->getPolaczenie()->query("SELECT * FROM aktorzy");
      while($row=$select->fetch()){
          echo "<div> <img src=".$row["zdjecie"]." alt=uwu> <div><p>".$row['imie']." ".$row['nazwisko']."</p></div></div>"; //użyć tego do wypisywania aktorów itp. z bazy na stronę, img nazwy w bazie, a obrazy w folderze img
  
      }
      ?>
      </div>
    </main>
  </body>
</html>
