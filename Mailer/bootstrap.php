<?php

require_once 'vendor/autoload.php';

use Mailgun\Mailgun;

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();
