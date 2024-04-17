<?php

use App\Models\Budget;
use App\Services\TaxCalculator;

require 'vendor/autoload.php';

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $calculator->calc($budget, 'ISS');