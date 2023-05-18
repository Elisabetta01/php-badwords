<?php

$testo = $_GET['testo'];
$parola = $_GET['parola'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>censura</title>
</head>
<body>
     <h1>Il testo inserito è:</h1>
     <p><?php echo $testo?></p>
     <h4>Lunghezza testo: <?php echo strlen($testo)?></h4>
</body>
</html>