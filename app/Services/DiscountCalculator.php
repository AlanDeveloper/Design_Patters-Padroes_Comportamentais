<?php

namespace App\Services;

use App\Models\Budget;
use App\Services\DiscountTypes\FiveHundredValue;
use App\Services\DiscountTypes\FiveItems;
use App\Services\DiscountTypes\NoDiscount;

class DiscountCalculator
{
    public function calc(Budget $budget) : float
    {
        $queue = new FiveHundredValue(
            new FiveItems(
                new NoDiscount()
            )
        );

        return $queue->calc($budget);
    }
}