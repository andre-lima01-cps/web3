<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página PHP</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    
    .erro {
      color: #b00020;
    }
  </style>
</head>
<body>
  <h1>Lista de frutas</h1>
  <ul id="lista">
    <?php
    $frutas = ["Banana","Maçã","Uva","Manga","Abacaxi","Pêssego","Açaí"];

    for ($i=0; $i<count($frutas); $i++) {
        echo "<li>" . $frutas[$i] . "</li>";
    }
    ?>
  </ul>
</body>
</html>