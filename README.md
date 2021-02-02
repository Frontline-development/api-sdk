# api-sdk

PHP REST client for the Frontline API.

## Installation
```composer require frontline-development/api-sdk```

Example usage:

#### Get Orders
```php
$fl = new \Frontline::Client($token, $secret);

var_dump($fl->get('/api/orders'));
```

passing params:
```php
$fl = new \Frontline::Client($token, $secret);

$fields = array('field' => 'value');

var_dump($fl->get('/api/orders', $fields));
```

#### Get Order
```php
$fl = new \Frontline::Client($token, $secret);

var_dump($fl->get('/api/orders/{order_id}'));
```

#### Update Order
```php
$fl = new \Frontline::Client($token, $secret);

$fields = array('field' => 'value');
var_dump($fl->update('/api/orders/{order_id}', $fields));
