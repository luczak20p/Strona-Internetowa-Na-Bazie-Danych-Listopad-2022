<?php
session_start();
ob_start();

if(isset($_POST['kolor'])&&$_POST['kolor']!=''){
$_SESSION['motyw']=$_POST['kolor'];
}
else if(!isset($_SESSION['motyw'])){
  $_SESSION['motyw']='styleUser.css';
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link id=stylowanie rel="stylesheet" href=<?php echo $_SESSION['motyw'] ?> />
    <script src="Userscript.js" defer></script>
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
        <a href="uzytkownik.php">użytkownik</a>
        <img src="user.png" alt="użytkownik"/>
      </div>
    </nav>
    <main>
        <div id=motywy>
            <div class=motive></div>
            <div class=motive></div>
            <div class=motive></div>
            <div class=motive></div>
        </div>
        <form action=uzytkownik.php method=post>
        <input id=kolor name=kolor display=none>
        <input type=submit value=Potwierdź motyw>
        </form>
     
    </main>
  </body>
</html>


	