<?php

require_once 'vendor/autoload.php';

use App\Actions\GenerateOrderByBanco;
use App\Actions\GenerateOrderByMail;
use App\Commands\GenerateOrder;
use App\Commands\GenerateOrderHandler;

$value = $argv[1];
$items_quantity = $argv[2];
$client_name = $argv[3];

$generate_order = new GenerateOrder($value, $items_quantity, $client_name);

$handler = (new GenerateOrderHandler());
$handler->add_action(new GenerateOrderByBanco());
$handler->add_action(new GenerateOrderByMail());
$handler->execute($generate_order);