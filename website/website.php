<?php
$pageTitle = "Dynamic Website";
$currentTime = date("H:i:s");
var_dump($_SERVER);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?=$pageTitle; ?></title>
</head>
<body>
  <h1>Welcome</h1>
  <p>The current time is <?=$currentTime; ?></p>
  <table>
    <thead>
      <tr>
        <strong>Key</strong>
        <strong>Value</strong>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($_SERVER as $key => $value): ?>
        <tr>
          <td><?=$key?></td>
          <td><?=$value?></td>
        </tr>
      <?php endforeach;?>
    </tbody>
  </table>

</body>
</html>

