<?php

namespace App\Abstracts;

use App\Models\Budget;

abstract class Discount
{
    protected ?Discount $next_discount;

    public function __construct(?Discount $next_discount)
    {
        $this->next_discount = $next_discount;
    }

    abstract public function calc(Budget $budget) : float;
}