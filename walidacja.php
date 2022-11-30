<?php
    session_start();
    ob_start();
    $jest=false;
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
    <main>
      <p class=walidacja>
    <?php
     if(isset($_POST["login"])&&isset($_POST["password"])){

      if (!preg_match('/^([A-Za-z0-9-_]+)$/', $_POST["login"])|| strlen($_POST["login"])<6) {
          echo "Błędny login";
          
      }
  
      if(!preg_match('/^([A-Za-z0-9-_]+)$/', $_POST["password"])|| strlen($_POST["password"])<6){
          echo "Błędne hasło";
        }
  
      if(preg_match('/^([A-Za-z0-9-_]+)$/', $_POST["password"])&&preg_match('/^([A-Za-z0-9-_]+)$/', $_POST["login"])&&strlen($_POST["password"])>=6&&strlen($_POST["login"])>=6){
  
        require_once("PoloczenieZBaza.php");
        $poloczenie1 = PoloczenieZBaza::getInstance();
        $poloczenie1->getPolaczenie()->query("use surpr1sen_osskars");
        $select = $poloczenie1->getPolaczenie()->query("SELECT * FROM uzytkownicy");
  
      while($row=$select->fetch()){
        if($_POST['login']==$row['login']){
            $jest=true;
            if(isset($_POST['email'])){
              echo "To konto już istnieje";
            }
          else{
          if($_POST['password']==$row['haslo']){
            $_SESSION['login']=$_POST['login'];
            header('Location:filmy.php');
          }
          else{
              echo "To konto ma inne hasło";
          }
        }
      }
      }
       
    if(!$jest){
        $numer = $select->rowCount()+1;
        if(isset($_POST['email'])){
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
              $select = $poloczenie1->getPolaczenie()->query("INSERT INTO `uzytkownicy` (`id_uzytkownik`, `login`, `haslo`, `email`) VALUES ({$numer},'{$_POST['login']}','{$_POST['password']}','{$_POST['email']}');");  
              echo "Konto utworzone pomyślnie";
            }
            else{
              echo "Błędny email";  
            }
            
        }
        else{
          echo "Takie konto nie istnieje";
        }
       
    }
    }
  }
  ?>
  </p>
  </main>
    <form action=index.php method=post>
        <input type=submit value="Powrót do logowania">
    </form>
  </body>
</html>
