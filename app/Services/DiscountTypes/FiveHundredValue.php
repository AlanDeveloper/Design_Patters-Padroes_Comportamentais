<?php

namespace App\Services\DiscountTypes;

use App\Abstracts\Discount;
use App\Models\Budget;

class FiveHundredValue extends Discount
{
    public function calc(Budget $budget) : float
    {
        if ($budget->value > 500) {
            return $budget->value * 0.05;
        }

        return $this->next_discount->calc($budget);
    }
}