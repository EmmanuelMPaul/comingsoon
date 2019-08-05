<?php

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

try {
  $db =  new PDO('mysql:host=127.0.0.1;dbname=comingsoon', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $pdo_ext) {

  die('we will be right back');
  // echo json_encode(http_response_code(400));
}
