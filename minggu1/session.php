<?php

  // start session
  session_start();

  // set session variabel
  $_SESSION["username"] = "investree";
  $_SESSION["password"] = "investree";
  echo "Session variable are set. <br>";



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>
<body>
  
  <?php
    // mengambil nilai session
    echo "Username nya adalah ". $_SESSION["username"];
    echo '<br>';
    echo "Password nya adalah ". $_SESSION["password"];
  
  ?>
  
  <?php
  // menghapus dan destroy session
  // menghapus seluruh variabel pada session
  session_unset();

  // menghapus session sehingga harus di start ulang
  session_destroy();

  ?>

</body>
</html>