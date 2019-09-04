# api-sdk

This repository contains Frontlines PHP SDK and samples for REST API.

Example usage:

#### Get Orders
```php
$token = "example_token";
$fl = new Frontline\Frontline($token);

var_dump($fl->get('/api/orders'));
```

#### Get Order
```php
$token = "example_token";
$fl = new Frontline\Frontline($token);

var_dump($fl->get('/api/orders/{order_id}'));
```

#### Update Order
```php
$token = "example_token";
$fl = new Frontline\Frontline($token);

$fields = array('field' => 'value');
var_dump($fl->update('/api/orders/{order_id}', $fields));