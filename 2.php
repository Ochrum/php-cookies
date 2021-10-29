<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    
    
    <form action="3.php" method="GET">
    <p>imie 
        </p>
        <input type="text" name="imie" id='imie'>
        <p>nazwisko </p>
        <input type="text" name="nazwisko" id='nazwisko'>
<br>
<br>
        <input type="submit" value="Wyślij" id='przycisk'>
    </form>
   
   <?php
  $butt=($_GET["but"]);
  $wagaa=($_GET["waga"]);
  echo ($butt);
  echo ($wagaa);

  setcookie('rb', $butt, time()+60);
   setcookie('waga', $wagaa, time()+60);

    
    ?>

</body>
</html>