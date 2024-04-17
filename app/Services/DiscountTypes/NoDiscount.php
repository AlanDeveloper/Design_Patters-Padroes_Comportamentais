<?php

namespace App\Services\DiscountTypes;

use App\Abstracts\Discount;
use App\Models\Budget;

class NoDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calc(Budget $budget) : float
    {
        return 0;
    }
}