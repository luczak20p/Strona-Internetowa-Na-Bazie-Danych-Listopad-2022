<?php
session_start();
ob_start();

if(!isset($_SESSION['motyw'])){
  $_SESSION['motyw']='styleUser.css';
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
  <body id=logowanie>
    <nav>
      <div>
        <a href="#">Osskars</a>
        <img src="logo.png" alt="logo" />
      </div>
      <ul>
        <li><a href="filmy.php">Filmy</a></li>
        <li><a href="aktorzy.php">Aktorzy</a></li>
        <li><a href="rezyserzy.php">Reżyserzy</a></li>
      </ul>
      <div>
        <a href="uzytkownik.php">użytkownik</a>
        <img src="user.png" alt="użytkownik" />
      </div>
    </nav>

    <main id=formularzLogowania>
      <div>
        <form action=walidacja.php method=post>
        <p>Login</p>
        <input name=login id=login />
        <p>Hasło</p>
        <input name=password id=password />
        <input id=submito type=submit value=Zaloguj>
        </form>
        <a href="rejestracja.php">Nie posiadasz konta? Załóż je!</a>
      </div>
      <img src="logowanie.jpg" alt="logowanie" id="tlo" />
    </main>
  </body>
</html>
