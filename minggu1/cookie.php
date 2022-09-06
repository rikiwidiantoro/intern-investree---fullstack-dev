<?php
// penggunaan value dulu baru nama cookie
  $value = "investree";
  $name_cookie = "TestCookie";

  setcookie($name_cookie, $value, time() + (86400 * 30), "/");
  
  // membaca cookie
  echo $_COOKIE[$name_cookie];
  
  // menghapus cookie
  setcookie($name_cookie, "", time() - 3600);

  echo $_COOKIE[$name_cookie];
  ?>