<?php
  namespace App\Controllers;

  use App\Controllers\UserController;

  require __DIR__ . '/../vendor/autoload.php';

  $userController = new UserController();

  header('Content-Type: application/json');
  echo json_encode($userController->index());
?>