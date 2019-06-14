<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    header{
      background-color: lightgrey;
      padding: 2em;
      text-align: center;
    }

  </style>

</head>
<body>
  <header>
    <!-- <h1>
      <?php

        $greeting = $_GET['name'];

        echo "Hello, $greeting";
    
    
      ?>    
    </h1> -->

    <!-- same as above -->
    <!-- <h1><?= "Hello, " . $_GET['name']; ?></h1> -->
  </header>

  <h3><?= "Hello, I think I get this " . htmlspecialchars($_GET['name']); ?>
</body>
</html>