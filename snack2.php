<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga 
punto e una chiocciola e che age sia un numero. Se tutto è ok
stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
$res = "Accesso negato";
if (strlen($name) > 2 && strpos($mail, ".") && strpos($mail, "@") && filter_var($age, FILTER_VALIDATE_INT)) {
    $res = "Accesso riuscito";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo $res ?></h1>
</body>
</html>