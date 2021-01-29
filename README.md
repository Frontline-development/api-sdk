# api-sdk

This repository contains Frontlines PHP SDK and samples for REST API.


Example usage:

#### Get Orders
```php
$fl = new \Frontline:Client($token, $secret);

var_dump($fl->get('/api/orders'));
```

#### Get Order
```php
$fl = new \Frontline:Client($token, $secret);

var_dump($fl->get('/api/orders/{order_id}'));
```

#### Update Order
```php
$fl = new \Frontline:Client($token, $secret);

$fields = array('field' => 'value');
var_dump($fl->update('/api/orders/{order_id}', $fields));
