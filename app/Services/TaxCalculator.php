<?php

namespace App\Services;

use App\Interfaces\Tax;
use App\Models\Budget;

class TaxCalculator
{
    public function calc(Budget $budget, Tax $tax) : float
    {
        return $tax->calc($budget);
    }
}