<?php

use App\Budget;
use App\TaxCalculator;

require 'vendor/autoload.php';

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $calculator->calc($budget, 'ISS');