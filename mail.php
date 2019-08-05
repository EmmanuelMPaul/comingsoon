<?php

header('Content-Type: Application/json');

require_once 'bootstrap.php';
require 'Guest.php';

$guest = new Guest($db);

if (isset($_POST['email'])) {

  $email =  $guest->test_input($_POST['email']);

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(http_response_code($guest->send($email)));

    # code...
  } else {
    echo json_encode(http_response_code(400));
    # code...
  }
}
