<?php

namespace App;

class TaxCalculator
{
    public function calc(Budget $budget, string $tax_name) : float
    {
        switch ($tax_name) {
            case 'ICMS':
                return $budget->value * 0.1;
            case 'ISS':
                return $budget->value * 0.06;
        }
    }
}