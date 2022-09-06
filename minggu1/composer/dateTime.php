<?php

  require 'vendor/autoload.php';

  use Carbon\Carbon;

  $jakarta_now = Carbon::now('Asia/Jakarta');

  echo "Sekarang di Jakarta: $jakarta_now ";

?>