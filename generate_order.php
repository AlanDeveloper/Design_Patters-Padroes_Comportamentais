<?php

require_once 'vendor/autoload.php';

use App\Models\Budget;
use App\Models\Order;

$value = $argv[1];
$items_quantity = $argv[2];
$client_name = $argv[3];

$budget = new Budget();
$budget->value = $value;
$budget->items_quantity = $items_quantity;

$order = new Order();
$order->date_finished = new DateTimeImmutable();
$order->client_name = $client_name;
$order->budget = $budget;

echo 'Cria pedido no banco de dados ' . PHP_EOL;
echo 'Envia email para o cliente ' . PHP_EOL;