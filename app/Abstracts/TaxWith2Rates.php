<?php

namespace App\Abstracts;

use App\Interfaces\Tax;
use App\Models\Budget;

abstract class TaxWith2Rates implements Tax
{
    abstract protected function applyMaxTax(Budget $budget) : bool;
    abstract protected function minTax(Budget $budget) : float;
    abstract protected function maxTax(Budget $budget) : float;

    public function calc(Budget $budget) : float
    {
        if ($this->applyMaxTax($budget)) {
            return $this->maxTax($budget);
        }

        return $this->minTax($budget);
    }
}