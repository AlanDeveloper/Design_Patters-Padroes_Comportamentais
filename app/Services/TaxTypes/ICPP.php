<?php

namespace App\Services\TaxTypes;

use App\Abstracts\TaxWith2Rates;
use App\Models\Budget;

class ICPP extends TaxWith2Rates
{
    protected function minTax(Budget $budget) : float
    {
        return $budget->value * 0.02;
    }

    protected function maxTax(Budget $budget) : float
    {
        return $budget->value * 0.03;
    }

    protected function applyMaxTax(Budget $budget) : bool
    {
        return $budget->value > 500;
    }
}