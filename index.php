<?php
require __DIR__ . '../vendor/autoload.php';

$token = '';

$fl = new Frontline\Frontline("6126adf03fc11a0830e92dd5a0226072");

var_dump($fl->get('/api/orders'));