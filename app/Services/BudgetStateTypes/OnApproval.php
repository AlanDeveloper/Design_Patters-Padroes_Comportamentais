<?php

namespace App\Services\BudgetStateTypes;

use App\Abstracts\BudgetState;
use App\Models\Budget;

class OnApproval extends BudgetState
{
    public function calcExtraDiscount(Budget $budget) : float
    {
        return $budget->value * 0.05;
    }

    public function approve(Budget $budget) : void
    {
        $budget->state = new Approved();
    }

    public function reject(Budget $budget) : void
    {
        $budget->state = new Rejected();
    }
}