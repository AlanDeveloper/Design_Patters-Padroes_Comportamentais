<?php

namespace App\Services\TaxTypes;

use App\Interfaces\Tax;
use App\Models\Budget;

class ICMS implements Tax
{
    public function calc(Budget $budget) : float
    {
        return $budget->value * 0.1;
    }
}