<?php

namespace App\Services\TaxTypes;

use App\Abstracts\TaxWith2Rates;
use App\Models\Budget;

class IKCV extends TaxWith2Rates
{
    protected function minTax(Budget $budget) : float
    {
        return $budget->value * 0.025;
    }

    protected function maxTax(Budget $budget) : float
    {
        return $budget->value * 0.04;
    }

    protected function applyMaxTax(Budget $budget) : bool
    {
        return $budget->value > 300 && $budget->items_quantity > 3;
    }
}