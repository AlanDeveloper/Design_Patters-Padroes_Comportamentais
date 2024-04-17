<?php

use App\Models\Budget;
use App\Services\ListBudgets;
use App\Services\ListOrders;

require_once 'vendor/autoload.php';

$list = [];

$budget1 = new Budget();
$budget1->value = 1500.0;
$budget1->items_quantity = 5;
$budget1->approve();

$budget2 = new Budget();
$budget2->value = 100.0;
$budget2->items_quantity = 3;
$budget2->approve();

$budget3 = new Budget();
$budget3->value = 2370.9;
$budget3->items_quantity = 20;
$budget3->reject();

$budget4 = new Budget();
$budget4->value = 230.75;
$budget4->items_quantity = 2;

$list = new ListBudgets;
$list->add($budget1);
$list->add($budget2);
$list->add($budget3);
$list->add($budget4);

foreach ($list->getIterator() as $budget) {
    echo 'Valor: ' . $budget->value . PHP_EOL;
    echo 'Quantidade: ' . $budget->items_quantity . PHP_EOL;
    echo 'Estado: ' . get_class($budget->state) . PHP_EOL;

    echo PHP_EOL;
}