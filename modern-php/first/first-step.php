<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .body-1{
      background-color: red;
    }
    .body-2{
      background-color: lightgreen;
    }
    .body-3{
      background-color: blue;
    }
    .body-4{
      background-color: gray;
    }
    .body-5{
      background-color: purple;
    }
    .body-6{
      background-color: brown;
    }
  </style>
</head>
<body class="body-<?php echo rand(1,6); ?>">
  <h2>  <?php echo 'test'; ?></h2>
 
  <h1>Hey, another php.file</h1>
  <h1><?php echo rand(1,6); ?></h1>
</body>
</html>