<?php

namespace App\Services\BudgetStateTypes;

use App\Abstracts\BudgetState;
use App\Models\Budget;
use DomainException;
use Exception;

class Rejected extends BudgetState
{
    public function calcExtraDiscount(Budget $budget) : void
    {
        throw new DomainException('Um orçamento reprovado não pode receber desconto.');
    }

    public function finish(Budget $budget) : void
    {
        $budget->state = new Finished;
    }
}