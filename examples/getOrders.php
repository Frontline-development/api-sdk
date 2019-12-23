<?php
require __DIR__ . '../vendor/autoload.php';

$token = "example_token";
$secret = "example_secret";

$fl = new Frontline\Frontline($token, $secret);

var_dump($fl->get('/api/orders'));