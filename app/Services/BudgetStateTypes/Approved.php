<?php

namespace App\Services\BudgetStateTypes;

use App\Abstracts\BudgetState;
use App\Models\Budget;

class Approved extends BudgetState
{
    public function calcExtraDiscount(Budget $budget) : float
    {
        return $budget->value * 0.02;
    }

    public function finish(Budget $budget) : void
    {
        $budget->state = new Finished;
    }
}