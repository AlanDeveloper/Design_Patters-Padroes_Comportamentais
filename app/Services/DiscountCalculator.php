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
        
        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }
        return 0;
    }
}