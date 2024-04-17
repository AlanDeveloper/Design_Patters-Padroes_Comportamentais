<?php

use App\Models\Budget;
use App\Services\DiscountCalculator;
use App\Services\TaxTypes\ICMS;
use App\Services\TaxCalculator;

require 'vendor/autoload.php';

// $calculator = new TaxCalculator();

// $budget = new Budget();
// $budget->value = 100;

// echo $calculator->calc($budget, new ICMS());

$calculator = new DiscountCalculator();

$budget = new Budget();
$budget->value = 700;
$budget->items_quantity = 5;

echo $calculator->calc($budget);
