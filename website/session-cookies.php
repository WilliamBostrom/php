<?php

if ($_SERVER['REQUEST_URI'] === '/favicon.ico') {
  exit;
}
session_start();
$hasCookie = isset($_COOKIE['user']);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  setcookie('user', $_POST['name'], time() + 3600, '/');
}

if(!$hasCookie){
  $welcomeMessage = "Welcome back, user!";
} else {
  $welcomeMessage = "Welcome back, " . htmlspecialchars($_COOKIE['user']);
}

if(!isset($_SESSION['visits'])){
  $_SESSION['visits'] = 1;
} else {
  $_SESSION['visits']++;
}

$visitsMessage = "This is your " . $_SESSION['visits'] . " visit!"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


  <div>
    <?php if (!$hasCookie): ?>
      <form method="POST">
        <label for="name">Your name</label>
        <input type="text" name="name" />
        <button>track</button>
    </form>
    <?php endif;?>
    <p>  <?=$welcomeMessage?></p>

<p><?=$visitsMessage?></p>
  </div>
</body>
</html>