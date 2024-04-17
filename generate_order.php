<?php

require_once 'vendor/autoload.php';

use App\Commands\GenerateOrder;

$value = $argv[1];
$items_quantity = $argv[2];
$client_name = $argv[3];

(new GenerateOrder($value, $items_quantity, $client_name))->execute();