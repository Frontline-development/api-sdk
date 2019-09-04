<?php
require __DIR__ . '../vendor/autoload.php';

$token = "example_token";

$fl = new Frontline\Frontline($token);

var_dump($fl->get('/api/orders'));