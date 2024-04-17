<?php

namespace App\Services\BudgetStateTypes;

use App\Abstracts\BudgetState;
use App\Models\Budget;
use DomainException;

class Finished extends BudgetState
{
    public function calcExtraDiscount(Budget $budget) : float
    {
        throw new DomainException('Um orçamento finalizado não pode receber desconto.');
    }
}