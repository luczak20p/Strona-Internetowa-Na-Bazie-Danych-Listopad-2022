<?php
session_start();
ob_start();

if(!isset($_SESSION['motyw'])){
  $_SESSION['motyw']='styleUser.css';
}
if(isset($_SESSION['login'])){
    if($_SESSION['login']!='Zaloguj się'){
        header('Location:filmy.php');
    }
}
?>


<!DOCTYPE html>
<html lang="pl">
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

    <main class=formularzLogowania>
      <div>
        <form action=walidacja.php method=post>
        <p>Login(Minimum 6 znaków)</p>
        <input name=login id=login />
        <p>Hasło(Minimum 6 znaków)</p>
        <input name=password id=password type=password />
        <p>Email</p>
        <input name=email id=email />
        <input id=submito type=submit value=Zaloguj>
        </form>
        <a href="index.php">Mam już konto</a>
        
      </div>
    </main>
    <img src="logowanie.jpg" alt="logowanie" class="tlo" />
  </body>
</html>