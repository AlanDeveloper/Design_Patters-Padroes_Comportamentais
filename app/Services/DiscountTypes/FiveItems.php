<?php

namespace App\Services\DiscountTypes;

use App\Abstracts\Discount;
use App\Models\Budget;

class FiveItems extends Discount
{
    public function calc(Budget $budget) : float
    {
        if ($budget->items_quantity > 5) {
            return $budget->value * 0.1;
        }

        return $this->next_discount->calc($budget);
    }
}