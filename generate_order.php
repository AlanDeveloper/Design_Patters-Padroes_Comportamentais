<?php

require_once 'vendor/autoload.php';

use App\Commands\GenerateOrder;
use App\Commands\GenerateOrderHandler;

$value = $argv[1];
$items_quantity = $argv[2];
$client_name = $argv[3];

$generate_order = new GenerateOrder($value, $items_quantity, $client_name);
(new GenerateOrderHandler())->execute($generate_order);