<?php

namespace App\Services;

use App\Models\Budget;

class DiscountCalculator
{
    public function calc(Budget $budget) : float
    {
        if ($budget->items_quantity > 5) {
            return $budget->value * 0.1;
        }
        return 0;
    }
}