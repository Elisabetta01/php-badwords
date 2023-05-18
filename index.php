<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <title>index</title>
</head>
<body>
     <form action="censura.php" method="GET">

          <div class="m-4">
               <label for="exampleFormControlTextarea1" class="form-label">Inserisci testo</label>
               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="testo"></textarea>
          </div>

          <div class="m-4">
               <label for="exampleFormControlTextarea1" class="form-label">Inserisci parola</label>
               <input class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example" name="parola">
          </div>

          <div class="text-center">
               <button type="submit" class="btn btn-outline-success">Invia dati</button>
          </div>
     </form>

</body>
</html>