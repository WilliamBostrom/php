<?php
$title = "Form website";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  echo "The email $email was submitted!";
  die;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
</head>
<body>
  <h1><?=$title?></h1>
  <h2>Please submit the form</h2>

  <form method="POST">
    <label>Email:</label>
    <input type="email" name="email"/>
    <button>Submit</button>
</form>
</body>
</html>