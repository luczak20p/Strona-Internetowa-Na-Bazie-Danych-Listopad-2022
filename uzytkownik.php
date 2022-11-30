<?php
session_start();
ob_start();



if(isset($_POST['kolor'])&&$_POST['kolor']!=''){
$_SESSION['motyw']=$_POST['kolor'];
}
else if(!isset($_SESSION['motyw'])){
  $_SESSION['motyw']='styleUser.css';
}

if(isset($_SESSION['login'])){
  if($_SESSION['login']==''){
    $_SESSION['login']='Zaloguj się';
  }
}

if(isset($_SESSION['login'])){
  if($_SESSION['login']=='Zaloguj się'){
      header('Location:index.php');
  }
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
    <script src="Userscript.js" defer></script>
    <script src="Weather.js" defer></script>
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
        <img src="user.png" alt="użytkownik"/>
      </div>
    </nav>
    <main>
        <div class=motywy>
            <div class=motive></div>
            <div class=motive></div>
            <div class=motive></div>
            <div class=motive></div>
        </div>
        <form action=uzytkownik.php method=post>
        <input id=kolor name=kolor display=none>
        <input type=submit value="Potwierdź motyw">
        </form>
        <div>
        </div>
        
        <form action=logout.php method=post>
        <input type=submit value=Wyloguj class=loggingOut>
        </form>
        <div class=responsywnosc>
        <div class=pogoda>
          <?php echo date('jS \of F Y h:i:s A')."<br>";?>
        </div>
        </div>
     
    </main>
  </body>
</html>


	